<?php
namespace Pioniro\TwitchApiBundle\Entity\Video;


use JMS\Serializer\Annotation as Serializer;

class Fps
{
    /**
     * @var float
     * @Serializer\SerializedName("high")
     * @Serializer\Type("float")
     */
    protected $high;

    /**
     * @var float
     * @Serializer\SerializedName("low")
     * @Serializer\Type("float")
     */
    protected $low;

    /**
     * @var float
     * @Serializer\SerializedName("medium")
     * @Serializer\Type("float")
     */
    protected $medium;

    /**
     * @var float
     * @Serializer\SerializedName("mobile")
     * @Serializer\Type("float")
     */
    protected $mobile;

    /**
     * Fps constructor.
     */
    public function __construct()
    {
        $this->low = 0;
        $this->medium = 0;
        $this->high = 0;
        $this->mobile = 0;
    }

    /**
     * @return float
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @param float $high
     * @return Fps
     */
    public function setHigh($high)
    {
        $this->high = $high;
        return $this;
    }

    /**
     * @return float
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * @param float $low
     * @return Fps
     */
    public function setLow($low)
    {
        $this->low = $low;
        return $this;
    }

    /**
     * @return float
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * @param float $medium
     * @return Fps
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;
        return $this;
    }

    /**
     * @return float
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param float $mobile
     * @return Fps
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }
}