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
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    /**
     * @return Video[]
     */
    public function getVideos(): array
    {
        return $this->videos;
    }

    /**
     * @param Video[] $videos
     */
    public function setVideos(array $videos): void
    {
        $this->videos = $videos;
    }
}