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
    public function getChunked(): string
    {
        return $this->chunked;
    }

    /**
     * @param string $chunked
     * @return Resolutions
     */
    public function setChunked(string $chunked): Resolutions
    {
        $this->chunked = $chunked;
        return $this;
    }

    /**
     * @return string
     */
    public function getHigh(): string
    {
        return $this->high;
    }

    /**
     * @param string $high
     * @return Resolutions
     */
    public function setHigh(string $high): Resolutions
    {
        $this->high = $high;
        return $this;
    }

    /**
     * @return string
     */
    public function getLow(): string
    {
        return $this->low;
    }

    /**
     * @param string $low
     * @return Resolutions
     */
    public function setLow(string $low): Resolutions
    {
        $this->low = $low;
        return $this;
    }

    /**
     * @return string
     */
    public function getMedium(): string
    {
        return $this->medium;
    }

    /**
     * @param string $medium
     * @return Resolutions
     */
    public function setMedium(string $medium): Resolutions
    {
        $this->medium = $medium;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     * @return Resolutions
     */
    public function setMobile(string $mobile): Resolutions
    {
        $this->mobile = $mobile;
        return $this;
    }
}