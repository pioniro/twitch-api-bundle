<?php
namespace Pioniro\TwitchApiBundle\Entity\Video;


use JMS\Serializer\Annotation as Serializer;

class MutedSegment
{
    /**
     * @var integer
     * @Serializer\SerializedName("duration")
     * @Serializer\Type("integer")
     */
    protected $duration;

    /**
     * @var integer
     * @Serializer\SerializedName("offset")
     * @Serializer\Type("integer")
     */
    protected $offset;

    /**
     * MutedSegment constructor.
     */
    public function __construct()
    {
        $this->duration = 0;
        $this->offset = 0;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return MutedSegment
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return MutedSegment
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }
}