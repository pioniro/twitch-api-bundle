<?php
namespace Pioniro\TwitchApiBundle\Entity\Video;

use JMS\Serializer\Annotation as Serializer;

class Thumbnails
{

    /**
     * @var Thumbnail[]
     * @Serializer\SerializedName("large")
     * @Serializer\Type("array<Pioniro\TwitchApiBundle\Entity\Video\Thumbnail>")
     */
    protected $large;

    /**
     * @var Thumbnail[]
     * @Serializer\SerializedName("medium")
     * @Serializer\Type("array<Pioniro\TwitchApiBundle\Entity\Video\Thumbnail>")
     */
    protected $medium;

    /**
     * @var Thumbnail[]
     * @Serializer\SerializedName("small")
     * @Serializer\Type("array<Pioniro\TwitchApiBundle\Entity\Video\Thumbnail>")
     */
    protected $small;

    /**
     * @var Thumbnail[]
     * @Serializer\SerializedName("template")
     * @Serializer\Type("array<Pioniro\TwitchApiBundle\Entity\Video\Thumbnail>")
     */
    protected $template;

    /**
     * Thumbnails constructor.
     */
    public function __construct()
    {
        $this->large = [];
        $this->medium = [];
        $this->small = [];
        $this->template = [];
    }

    /**
     * @return Thumbnail[]
     */
    public function getLarge(): array
    {
        return $this->large;
    }

    /**
     * @param Thumbnail[] $large
     * @return Thumbnails
     */
    public function setLarge(array $large): Thumbnails
    {
        $this->large = $large;
        return $this;
    }

    /**
     * @return Thumbnail[]
     */
    public function getMedium(): array
    {
        return $this->medium;
    }

    /**
     * @param Thumbnail[] $medium
     * @return Thumbnails
     */
    public function setMedium(array $medium): Thumbnails
    {
        $this->medium = $medium;
        return $this;
    }

    /**
     * @return Thumbnail[]
     */
    public function getSmall(): array
    {
        return $this->small;
    }

    /**
     * @param Thumbnail[] $small
     * @return Thumbnails
     */
    public function setSmall(array $small): Thumbnails
    {
        $this->small = $small;
        return $this;
    }

    /**
     * @return Thumbnail[]
     */
    public function getTemplate(): array
    {
        return $this->template;
    }

    /**
     * @param Thumbnail[] $template
     * @return Thumbnails
     */
    public function setTemplate(array $template): Thumbnails
    {
        $this->template = $template;
        return $this;
    }
}