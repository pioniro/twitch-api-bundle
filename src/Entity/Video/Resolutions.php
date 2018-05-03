<?php
namespace Pioniro\TwitchApiBundle\Entity\Video;

use JMS\Serializer\Annotation as Serializer;

class Resolutions
{
    /**
     * @var string
     * @Serializer\SerializedName("chunked")
     * @Serializer\Type("string")
     */
    protected $chunked;
    /**
     * @var string
     * @Serializer\SerializedName("high")
     * @Serializer\Type("string")
     */
    protected $high;

    /**
     * @var string
     * @Serializer\SerializedName("low")
     * @Serializer\Type("string")
     */
    protected $low;

    /**
     * @var string
     * @Serializer\SerializedName("medium")
     * @Serializer\Type("string")
     */
    protected $medium;

    /**
     * @var string
     * @Serializer\SerializedName("mobile")
     * @Serializer\Type("string")
     */
    protected $mobile;

    /**
     * Resolutions constructor.
     */
    public function __construct()
    {
        $this->chunked = '';
        $this->low = '';
        $this->medium = '';
        $this->high = '';
        $this->mobile = '';
    }

    /**
     * @return string
     */
    public function getChunked()
    {
        return $this->chunked;
    }

    /**
     * @param string $chunked
     * @return Resolutions
     */
    public function setChunked($chunked)
    {
        $this->chunked = $chunked;
        return $this;
    }

    /**
     * @return string
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @param string $high
     * @return Resolutions
     */
    public function setHigh($high)
    {
        $this->high = $high;
        return $this;
    }

    /**
     * @return string
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * @param string $low
     * @return Resolutions
     */
    public function setLow($low)
    {
        $this->low = $low;
        return $this;
    }

    /**
     * @return string
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * @param string $medium
     * @return Resolutions
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     * @return Resolutions
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }
}