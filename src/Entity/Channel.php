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
    public function isMature(): bool
    {
        return $this->mature;
    }

    /**
     * @param bool $mature
     * @return Channel
     */
    public function setMature(bool $mature): Channel
    {
        $this->mature = $mature;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Channel
     */
    public function setStatus(string $status): Channel
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getBroadcasterLanguage(): string
    {
        return $this->broadcasterLanguage;
    }

    /**
     * @param string $broadcasterLanguage
     * @return Channel
     */
    public function setBroadcasterLanguage(string $broadcasterLanguage): Channel
    {
        $this->broadcasterLanguage = $broadcasterLanguage;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return Channel
     */
    public function setDisplayName(string $displayName): Channel
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getGame(): string
    {
        return $this->game;
    }

    /**
     * @param string $game
     * @return Channel
     */
    public function setGame(string $game): Channel
    {
        $this->game = $game;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return Channel
     */
    public function setLanguage(string $language): Channel
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Channel
     */
    public function setName(string $name): Channel
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Channel
     */
    public function setCreatedAt(\DateTime $createdAt): Channel
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return Channel
     */
    public function setUpdatedAt(\DateTime $updatedAt): Channel
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPartner(): bool
    {
        return $this->partner;
    }

    /**
     * @param bool $partner
     * @return Channel
     */
    public function setPartner(bool $partner): Channel
    {
        $this->partner = $partner;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     * @return Channel
     */
    public function setLogo(string $logo): Channel
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getVideoBanner(): ?string
    {
        return $this->videoBanner;
    }

    /**
     * @param null|string $videoBanner
     * @return Channel
     */
    public function setVideoBanner(?string $videoBanner): Channel
    {
        $this->videoBanner = $videoBanner;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getProfileBanner(): ?string
    {
        return $this->profileBanner;
    }

    /**
     * @param null|string $profileBanner
     * @return Channel
     */
    public function setProfileBanner(?string $profileBanner): Channel
    {
        $this->profileBanner = $profileBanner;
        return $this;
    }

    /**
     * @return string
     */
    public function getProfileBannerBackgroundColor(): string
    {
        return $this->profileBannerBackgroundColor;
    }

    /**
     * @param string $profileBannerBackgroundColor
     * @return Channel
     */
    public function setProfileBannerBackgroundColor(string $profileBannerBackgroundColor): Channel
    {
        $this->profileBannerBackgroundColor = $profileBannerBackgroundColor;
        return $this;
    }

    /**
     * @return int
     */
    public function getViews(): int
    {
        return $this->views;
    }

    /**
     * @param int $views
     * @return Channel
     */
    public function setViews(int $views): Channel
    {
        $this->views = $views;
        return $this;
    }

    /**
     * @return int
     */
    public function getFollowers(): int
    {
        return $this->followers;
    }

    /**
     * @param int $followers
     * @return Channel
     */
    public function setFollowers(int $followers): Channel
    {
        $this->followers = $followers;
        return $this;
    }

    /**
     * @return string
     */
    public function getBroadcasterType(): string
    {
        return $this->broadcasterType;
    }

    /**
     * @param string $broadcasterType
     * @return Channel
     */
    public function setBroadcasterType(string $broadcasterType): Channel
    {
        $this->broadcasterType = $broadcasterType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Channel
     */
    public function setDescription(string $description): Channel
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     * @return Channel
     */
    public function setEmail(?string $email): Channel
    {
        $this->email = $email;
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
     * @return Channel
     */
    public function setUrl(string $url): Channel
    {
        $this->url = $url;
        return $this;
    }
}