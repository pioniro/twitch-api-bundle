<?php
namespace Pioniro\TwitchApiBundle\Entity;


use JMS\Serializer\Annotation as Serializer;

class Channel
{
    /**
     * @var bool
     * @Serializer\SerializedName("mature")
     * @Serializer\Type("boolean")
     */
    protected $mature;

    /**
     * @var string
     * @Serializer\SerializedName("status")
     * @Serializer\Type("string")
     */
    protected $status;

    /**
     * @var string
     * @Serializer\SerializedName("broadcaster_language")
     * @Serializer\Type("string")
     */
    protected $broadcasterLanguage;

    /**
     * @var string
     * @Serializer\SerializedName("display_name")
     * @Serializer\Type("string")
     */
    protected $displayName;

    /**
     * @var string
     * @Serializer\SerializedName("game")
     * @Serializer\Type("string")
     */
    protected $game;

    /**
     * @var string
     * @Serializer\SerializedName("language")
     * @Serializer\Type("string")
     */
    protected $language;

    /**
     * @var string|integer
     * @Serializer\SerializedName("_id")
     * @Serializer\Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var string
     * @Serializer\SerializedName("url")
     * @Serializer\Type("string")
     */
    protected $url;

    /**
     * @var \DateTime
     * @Serializer\SerializedName("created_at")
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     * @Serializer\SerializedName("updated_at")
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
     */
    protected $updatedAt;

    /**
     * @var bool
     * @Serializer\SerializedName("partner")
     * @Serializer\Type("boolean")
     */
    protected $partner;

    /**
     * @var string
     * @Serializer\SerializedName("logo")
     * @Serializer\Type("string")
     */
    protected $logo;

    /**
     * @var string|null
     * @Serializer\SerializedName("video_banner")
     * @Serializer\Type("string")
     */
    protected $videoBanner;

    /**
     * @var string|null
     * @Serializer\SerializedName("profile_banner")
     * @Serializer\Type("string")
     */
    protected $profileBanner;

    /**
     * @var string
     * @Serializer\SerializedName("profile_banner_background_color")
     * @Serializer\Type("string")
     */
    protected $profileBannerBackgroundColor;

    /**
     * @var integer
     * @Serializer\SerializedName("views")
     * @Serializer\Type("integer")
     */
    protected $views;

    /**
     * @var integer
     * @Serializer\SerializedName("followers")
     * @Serializer\Type("integer")
     */
    protected $followers;

    /**
     * @var string
     * @Serializer\SerializedName("broadcaster_type")
     * @Serializer\Type("string")
     */
    protected $broadcasterType;

    /**
     * @var string
     * @Serializer\SerializedName("description")
     * @Serializer\Type("string")
     */
    protected $description;

    /**
     * @var string|null
     * @Serializer\SerializedName("email")
     * @Serializer\Type("string")
     */
    protected $email;

    /**
     * Channel constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return bool
     */
    public function isMature()
    {
        return $this->mature;
    }

    /**
     * @param bool $mature
     * @return Channel
     */
    public function setMature($mature)
    {
        $this->mature = $mature;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Channel
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getBroadcasterLanguage()
    {
        return $this->broadcasterLanguage;
    }

    /**
     * @param string $broadcasterLanguage
     * @return Channel
     */
    public function setBroadcasterLanguage($broadcasterLanguage)
    {
        $this->broadcasterLanguage = $broadcasterLanguage;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return Channel
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * @param string $game
     * @return Channel
     */
    public function setGame($game)
    {
        $this->game = $game;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return Channel
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|string $id
     * @return Channel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Channel
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Channel
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return Channel
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPartner()
    {
        return $this->partner;
    }

    /**
     * @param bool $partner
     * @return Channel
     */
    public function setPartner($partner)
    {
        $this->partner = $partner;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     * @return Channel
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getVideoBanner()
    {
        return $this->videoBanner;
    }

    /**
     * @param null|string $videoBanner
     * @return Channel
     */
    public function setVideoBanner($videoBanner)
    {
        $this->videoBanner = $videoBanner;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getProfileBanner()
    {
        return $this->profileBanner;
    }

    /**
     * @param null|string $profileBanner
     * @return Channel
     */
    public function setProfileBanner($profileBanner)
    {
        $this->profileBanner = $profileBanner;
        return $this;
    }

    /**
     * @return string
     */
    public function getProfileBannerBackgroundColor()
    {
        return $this->profileBannerBackgroundColor;
    }

    /**
     * @param string $profileBannerBackgroundColor
     * @return Channel
     */
    public function setProfileBannerBackgroundColor($profileBannerBackgroundColor)
    {
        $this->profileBannerBackgroundColor = $profileBannerBackgroundColor;
        return $this;
    }

    /**
     * @return int
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @param int $views
     * @return Channel
     */
    public function setViews($views)
    {
        $this->views = $views;
        return $this;
    }

    /**
     * @return int
     */
    public function getFollowers()
    {
        return $this->followers;
    }

    /**
     * @param int $followers
     * @return Channel
     */
    public function setFollowers($followers)
    {
        $this->followers = $followers;
        return $this;
    }

    /**
     * @return string
     */
    public function getBroadcasterType()
    {
        return $this->broadcasterType;
    }

    /**
     * @param string $broadcasterType
     * @return Channel
     */
    public function setBroadcasterType($broadcasterType)
    {
        $this->broadcasterType = $broadcasterType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Channel
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     * @return Channel
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Channel
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}