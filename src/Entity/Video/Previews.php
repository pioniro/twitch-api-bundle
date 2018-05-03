<?php
namespace Pioniro\TwitchApiBundle\Entity\Video;

use JMS\Serializer\Annotation as Serializer;

class Previews
{

    /**
     * @var string
     * @Serializer\SerializedName("small")
     * @Serializer\Type("string")
     */
    protected $small;

    /**
     * @var string
     * @Serializer\SerializedName("template")
     * @Serializer\Type("string")
     */
    protected $template;

    /**
     * @var string
     * @Serializer\SerializedName("medium")
     * @Serializer\Type("string")
     */
    protected $medium;

    /**
     * @var string
     * @Serializer\SerializedName("large")
     * @Serializer\Type("string")
     */
    protected $large;

    /**
     * @return string
     */
    public function getSmall()
    {
        return $this->small;
    }

    /**
     * @param string $small
     * @return Previews
     */
    public function setSmall($small)
    {
        $this->small = $small;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param string $template
     * @return Previews
     */
    public function setTemplate($template)
    {
        $this->template = $template;
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
     * @return Previews
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;
        return $this;
    }

    /**
     * @return string
     */
    public function getLarge()
    {
        return $this->large;
    }

    /**
     * @param string $large
     * @return Previews
     */
    public function setLarge($large)
    {
        $this->large = $large;
        return $this;
    }
}