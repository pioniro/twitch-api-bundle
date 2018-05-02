<?php
namespace Pioniro\TwitchApiBundle\Entity;

use JMS\Serializer\Annotation as Serializer;

class Video
{
    /**
     * @var string
     * @Serializer\SerializedName("_id")
     * @Serializer\Type("string")
     */
    protected $id;

    /**
     * @var integer
     * @Serializer\SerializedName("broadcast_id")
     * @Serializer\Type("integer")
     */
    protected $broadcastId;

    /**
     * @var
     * @Serializer\SerializedName("broadcast_type")
     * @Serializer\Type("string")
     */
    protected $broadcastType;

    /**
     * @var Channel
     * @Serializer\SerializedName("channel")
     * @Serializer\Type("Pioniro\TwitchApiBundle\Entity\Channel")
     */
    protected $channel;

    /**
     * @var \DateTime
     * @Serializer\SerializedName("created_at")
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
     */
    protected $createdAt;

    /**
     * @var string
     * @Serializer\SerializedName("description")
     * @Serializer\Type("string")
     */
    protected $description;

    /**
     * @var string
     * @Serializer\SerializedName("description_html")
     * @Serializer\Type("string")
     */
    protected $descriptionHtml;

    /**
     * @var Video\Fps
     * @Serializer\SerializedName("fps")
     * @Serializer\Type("Pioniro\TwitchApiBundle\Entity\Video\Fps")
     */
    protected $fps;

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
     * @var integer
     * @Serializer\SerializedName("length")
     * @Serializer\Type("integer")
     */
    protected $length;

    /**
     * @var Video\MutedSegment[]
     * @Serializer\SerializedName("muted_segments")
     * @Serializer\Type("array<Pioniro\TwitchApiBundle\Entity\Video\MutedSegment>")
     */
    protected $mutedSegments;

    /**
     * @var Video\Previews
     * @Serializer\SerializedName("preview")
     * @Serializer\Type("Pioniro\TwitchApiBundle\Entity\Video\Previews")
     */
    protected $preview;

    /**
     * @var \DateTime
     * @Serializer\SerializedName("published_at")
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
     */
    protected $publishedAt;

    /**
     * @var Video\Resolutions
     * @Serializer\SerializedName("resolutions")
     * @Serializer\Type("Pioniro\TwitchApiBundle\Entity\Video\Resolutions")
     */
    protected $resolutions;

    /**
     * @var string
     * @Serializer\SerializedName("status")
     * @Serializer\Type("string")
     */
    protected $status;

    /**
     * @var string
     * @Serializer\SerializedName("tag_list")
     * @Serializer\Type("string")
     */
    protected $tagList;

    /**
     * @var Video\Thumbnails
     * @Serializer\SerializedName("thumbnails")
     * @Serializer\Type("Pioniro\TwitchApiBundle\Entity\Video\Thumbnails")
     */
    protected $thumbnails;

    /**
     * @var string
     * @Serializer\SerializedName("title")
     * @Serializer\Type("string")
     */
    protected $title;

    /**
     * @var string
     * @Serializer\SerializedName("url")
     * @Serializer\Type("string")
     */
    protected $url;

    /**
     * @var string
     * @Serializer\SerializedName("viewable")
     * @Serializer\Type("string")
     */
    protected $viewable;

    /**
     * @var \DateTime|null
     * @Serializer\SerializedName("viewable_at")
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
     */
    protected $viewableAt;

    /**
     * @var integer
     * @Serializer\SerializedName("views")
     * @Serializer\Type("integer")
     */
    protected $views;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Video
     */
    public function setId(string $id): Video
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getBroadcastId(): int
    {
        return $this->broadcastId;
    }

    /**
     * @param int $broadcastId
     * @return Video
     */
    public function setBroadcastId(int $broadcastId): Video
    {
        $this->broadcastId = $broadcastId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBroadcastType()
    {
        return $this->broadcastType;
    }

    /**
     * @param mixed $broadcastType
     * @return Video
     */
    public function setBroadcastType($broadcastType)
    {
        $this->broadcastType = $broadcastType;
        return $this;
    }

    /**
     * @return Channel
     */
    public function getChannel(): Channel
    {
        return $this->channel;
    }

    /**
     * @param Channel $channel
     * @return Video
     */
    public function setChannel(Channel $channel): Video
    {
        $this->channel = $channel;
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
     * @return Video
     */
    public function setCreatedAt(\DateTime $createdAt): Video
    {
        $this->createdAt = $createdAt;
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
     * @return Video
     */
    public function setDescription(string $description): Video
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionHtml(): string
    {
        return $this->descriptionHtml;
    }

    /**
     * @param string $descriptionHtml
     * @return Video
     */
    public function setDescriptionHtml(string $descriptionHtml): Video
    {
        $this->descriptionHtml = $descriptionHtml;
        return $this;
    }

    /**
     * @return Video\Fps
     */
    public function getFps(): Video\Fps
    {
        return $this->fps;
    }

    /**
     * @param Video\Fps $fps
     * @return Video
     */
    public function setFps(Video\Fps $fps): Video
    {
        $this->fps = $fps;
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
     * @return Video
     */
    public function setGame(string $game): Video
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
     * @return Video
     */
    public function setLanguage(string $language): Video
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     * @return Video
     */
    public function setLength(int $length): Video
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return Video\MutedSegment[]
     */
    public function getMutedSegments(): array
    {
        return $this->mutedSegments;
    }

    /**
     * @param Video\MutedSegment[] $mutedSegments
     * @return Video
     */
    public function setMutedSegments(array $mutedSegments): Video
    {
        $this->mutedSegments = $mutedSegments;
        return $this;
    }

    /**
     * @return Video\Previews
     */
    public function getPreview(): Video\Previews
    {
        return $this->preview;
    }

    /**
     * @param Video\Previews $preview
     * @return Video
     */
    public function setPreview(Video\Previews $preview): Video
    {
        $this->preview = $preview;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPublishedAt(): \DateTime
    {
        return $this->publishedAt;
    }

    /**
     * @param \DateTime $publishedAt
     * @return Video
     */
    public function setPublishedAt(\DateTime $publishedAt): Video
    {
        $this->publishedAt = $publishedAt;
        return $this;
    }

    /**
     * @return Video\Resolutions
     */
    public function getResolutions(): Video\Resolutions
    {
        return $this->resolutions;
    }

    /**
     * @param Video\Resolutions $resolutions
     * @return Video
     */
    public function setResolutions(Video\Resolutions $resolutions): Video
    {
        $this->resolutions = $resolutions;
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
     * @return Video
     */
    public function setStatus(string $status): Video
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getTagList(): string
    {
        return $this->tagList;
    }

    /**
     * @param string $tagList
     * @return Video
     */
    public function setTagList(string $tagList): Video
    {
        $this->tagList = $tagList;
        return $this;
    }

    /**
     * @return Video\Thumbnails
     */
    public function getThumbnails(): Video\Thumbnails
    {
        return $this->thumbnails;
    }

    /**
     * @param Video\Thumbnails $thumbnails
     * @return Video
     */
    public function setThumbnails(Video\Thumbnails $thumbnails): Video
    {
        $this->thumbnails = $thumbnails;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Video
     */
    public function setTitle(string $title): Video
    {
        $this->title = $title;
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
     * @return Video
     */
    public function setUrl(string $url): Video
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getViewable(): string
    {
        return $this->viewable;
    }

    /**
     * @param string $viewable
     * @return Video
     */
    public function setViewable(string $viewable): Video
    {
        $this->viewable = $viewable;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getViewableAt(): ?\DateTime
    {
        return $this->viewableAt;
    }

    /**
     * @param \DateTime|null $viewableAt
     * @return Video
     */
    public function setViewableAt(?\DateTime $viewableAt): Video
    {
        $this->viewableAt = $viewableAt;
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
     * @return Video
     */
    public function setViews(int $views): Video
    {
        $this->views = $views;
        return $this;
    }
}