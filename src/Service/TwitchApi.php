<?php
namespace Pioniro\TwitchApiBundle\Service;

use JMS\Serializer\SerializerInterface;
use Pioniro\TwitchApiBundle\Entity\Channel;
use Pioniro\TwitchApiBundle\Entity\Response\VideoList;
use Pioniro\TwitchApiBundle\Entity\Video;

class TwitchApi extends \TwitchApi\TwitchApi
{

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * TwitchApi constructor.
     * @param null $clientId
     * @param null $secret
     * @param null $uri
     * @param null $version
     * @param null $scope
     * @param SerializerInterface $serializer
     * @throws \TwitchApi\Exceptions\ClientIdRequiredException
     */
    public function __construct($clientId = null, $secret = null, $uri = null, $version = null, $scope = null,
                                SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
        parent::__construct([
            'client_id' => $clientId,
            'client_secret' => $secret,
            'redirect_uri' => $uri,
            'api_version' => $version,
            'scope' => $scope,
        ]);
    }

    /**
     * @param int|string $channelIdentifier
     * @return Channel|null
     * @throws \TwitchApi\Exceptions\InvalidIdentifierException
     */
    public function getChannel($channelIdentifier)
    {
        $response = parent::getChannel($channelIdentifier);
        if(is_array($response)) {
            return $this->serializer->deserialize(json_encode($response), Channel::class, 'json');
        }
        return null;

    }

    /**
     * @param int|string $channelIdentifier
     * @param int $limit
     * @param int $offset
     * @param string $broadcastType
     * @param null $language
     * @param string $sort
     * @return VideoList|null
     * @throws \TwitchApi\Exceptions\InvalidIdentifierException
     * @throws \TwitchApi\Exceptions\InvalidLimitException
     * @throws \TwitchApi\Exceptions\InvalidOffsetException
     * @throws \TwitchApi\Exceptions\InvalidTypeException
     * @throws \TwitchApi\Exceptions\UnsupportedOptionException
     */
    public function getChannelVideos($channelIdentifier, $limit = 10, $offset = 0, $broadcastType = 'highlight',
                                     $language = null, $sort = 'time')
    {
        $response = parent::getChannelVideos($channelIdentifier, $limit, $offset, $broadcastType, $language, $sort);
        if(is_array($response)) {
            // todo! fix this hack. fucking twitch api!
            foreach($response['videos'] as &$video) {
                $video['channel']['created_at'] = \DateTime::createFromFormat('Y-m-d\TH:i:s.uP',
                    $video['channel']['created_at'])->format('Y-m-d\TH:i:sP');
                $video['channel']['updated_at'] = \DateTime::createFromFormat('Y-m-d\TH:i:s.uP',
                    $video['channel']['updated_at'])->format('Y-m-d\TH:i:sP');
            }
            return $this->serializer->deserialize(json_encode($response), VideoList::class, 'json');
        }
        return null;

    }
}