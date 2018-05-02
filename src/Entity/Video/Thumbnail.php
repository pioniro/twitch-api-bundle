<?php
namespace Pioniro\TwitchApiBundle\Entity\Video;

use JMS\Serializer\Annotation as Serializer;

class Thumbnail
{
    /**
     * @var string
     * @Serializer\SerializedName("type")
     * @Serializer\Type("string")
     */
    protected $type;

    /**
     * @var string
     * @Serializer\SerializedName("url")
     * @Serializer\Type("string")
     */
    protected $url;

    /**
     * Thumbnail constructor.
     */
    public function __construct()
    {
        $this->type = '';
        $this->url = '';
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Thumbnail
     */
    public function setType(string $type): Thumbnail
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Thumbnail
     */
    public function setUrl(string $url): Thumbnail
    {
        $this->url = $url;
        return $this;
    }
}