<?php
namespace Pioniro\TwitchApiBundle\Entity\Response;


use JMS\Serializer\Annotation as Serializer;
use Pioniro\TwitchApiBundle\Entity\Video;

class VideoList
{
    /**
     * @var integer
     * @Serializer\SerializedName("_total")
     * @Serializer\Type("integer")
     */
    protected $total;

    /**
     * @var Video[]
     * @Serializer\SerializedName("videos")
     * @Serializer\Type("array<Pioniro\TwitchApiBundle\Entity\Video>")
     */
    protected $videos;

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return VideoList
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return Video[]
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * @param Video[] $videos
     * @return VideoList
     */
    public function setVideos($videos)
    {
        $this->videos = $videos;
        return $this;
    }
}