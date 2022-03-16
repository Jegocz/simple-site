<?php
declare(strict_types=1);
namespace App\Generated\DataTransferObjects;

/**
 * Auto generated data provider
 */
final class SectionDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var string */
    protected $type;

    /** @var string */
    protected $templateId;

    /** @var string */
    protected $title;

    /** @var string */
    protected $text;

    /** @var string */
    protected $image;

    /** @var \App\Generated\DataTransferObjects\SubSectionDataProvider[] */
    protected $subSections = [];

    /** @var \App\Generated\DataTransferObjects\SocialMediaLinkDataProvider[] */
    protected $socialMediaLinks = [];

    /** @var string */
    protected $placeHolder;

    /** @var string */
    protected $buttonTitle;


    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }


    /**
     * @param string $type
     * @return SectionDataProvider
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }


    /**
     * @return SectionDataProvider
     */
    public function unsetType()
    {
        $this->type = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasType()
    {
        return ($this->type !== null && $this->type !== []);
    }


    /**
     * @return string
     */
    public function getTemplateId(): string
    {
        return $this->templateId;
    }


    /**
     * @param string $templateId
     * @return SectionDataProvider
     */
    public function setTemplateId(string $templateId)
    {
        $this->templateId = $templateId;

        return $this;
    }


    /**
     * @return SectionDataProvider
     */
    public function unsetTemplateId()
    {
        $this->templateId = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasTemplateId()
    {
        return ($this->templateId !== null && $this->templateId !== []);
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
     * @return SectionDataProvider
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }


    /**
     * @return SectionDataProvider
     */
    public function unsetTitle()
    {
        $this->title = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasTitle()
    {
        return ($this->title !== null && $this->title !== []);
    }


    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }


    /**
     * @param string $text
     * @return SectionDataProvider
     */
    public function setText(string $text)
    {
        $this->text = $text;

        return $this;
    }


    /**
     * @return SectionDataProvider
     */
    public function unsetText()
    {
        $this->text = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasText()
    {
        return ($this->text !== null && $this->text !== []);
    }


    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }


    /**
     * @param string $image
     * @return SectionDataProvider
     */
    public function setImage(string $image)
    {
        $this->image = $image;

        return $this;
    }


    /**
     * @return SectionDataProvider
     */
    public function unsetImage()
    {
        $this->image = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasImage()
    {
        return ($this->image !== null && $this->image !== []);
    }


    /**
     * @return \App\Generated\DataTransferObjects\SubSectionDataProvider[]
     */
    public function getSubSections(): array
    {
        return $this->subSections;
    }


    /**
     * @param \App\Generated\DataTransferObjects\SubSectionDataProvider[] $subSections
     * @return SectionDataProvider
     */
    public function setSubSections(array $subSections)
    {
        $this->subSections = $subSections;

        return $this;
    }


    /**
     * @return SectionDataProvider
     */
    public function unsetSubSections()
    {
        $this->subSections = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasSubSections()
    {
        return ($this->subSections !== null && $this->subSections !== []);
    }


    /**
     * @param \App\Generated\DataTransferObjects\SubSectionDataProvider $SubSection
     * @return SectionDataProvider
     */
    public function addSubSection(SubSectionDataProvider $SubSection)
    {
        $this->subSections[] = $SubSection; return $this;
    }


    /**
     * @return \App\Generated\DataTransferObjects\SocialMediaLinkDataProvider[]
     */
    public function getSocialMediaLinks(): array
    {
        return $this->socialMediaLinks;
    }


    /**
     * @param \App\Generated\DataTransferObjects\SocialMediaLinkDataProvider[] $socialMediaLinks
     * @return SectionDataProvider
     */
    public function setSocialMediaLinks(array $socialMediaLinks)
    {
        $this->socialMediaLinks = $socialMediaLinks;

        return $this;
    }


    /**
     * @return SectionDataProvider
     */
    public function unsetSocialMediaLinks()
    {
        $this->socialMediaLinks = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasSocialMediaLinks()
    {
        return ($this->socialMediaLinks !== null && $this->socialMediaLinks !== []);
    }


    /**
     * @param \App\Generated\DataTransferObjects\SocialMediaLinkDataProvider $SocialMediaLink
     * @return SectionDataProvider
     */
    public function addSocialMediaLink(SocialMediaLinkDataProvider $SocialMediaLink)
    {
        $this->socialMediaLinks[] = $SocialMediaLink; return $this;
    }


    /**
     * @return string
     */
    public function getPlaceHolder(): string
    {
        return $this->placeHolder;
    }


    /**
     * @param string $placeHolder
     * @return SectionDataProvider
     */
    public function setPlaceHolder(string $placeHolder)
    {
        $this->placeHolder = $placeHolder;

        return $this;
    }


    /**
     * @return SectionDataProvider
     */
    public function unsetPlaceHolder()
    {
        $this->placeHolder = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasPlaceHolder()
    {
        return ($this->placeHolder !== null && $this->placeHolder !== []);
    }


    /**
     * @return string
     */
    public function getButtonTitle(): string
    {
        return $this->buttonTitle;
    }


    /**
     * @param string $buttonTitle
     * @return SectionDataProvider
     */
    public function setButtonTitle(string $buttonTitle)
    {
        $this->buttonTitle = $buttonTitle;

        return $this;
    }


    /**
     * @return SectionDataProvider
     */
    public function unsetButtonTitle()
    {
        $this->buttonTitle = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasButtonTitle()
    {
        return ($this->buttonTitle !== null && $this->buttonTitle !== []);
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
          'type' =>
          array (
            'name' => 'type',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'templateId' =>
          array (
            'name' => 'templateId',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'title' =>
          array (
            'name' => 'title',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'text' =>
          array (
            'name' => 'text',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'image' =>
          array (
            'name' => 'image',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'subSections' =>
          array (
            'name' => 'subSections',
            'allownull' => false,
            'default' => '',
            'type' => '\\App\\Generated\\DataTransferObjects\\SubSectionDataProvider[]',
            'is_collection' => true,
            'is_dataprovider' => false,
            'isCamelCase' => false,
            'singleton' => 'SubSection',
            'singleton_type' => '\\App\\Generated\\DataTransferObjects\\SubSectionDataProvider',
          ),
          'socialMediaLinks' =>
          array (
            'name' => 'socialMediaLinks',
            'allownull' => false,
            'default' => '',
            'type' => '\\App\\Generated\\DataTransferObjects\\SocialMediaLinkDataProvider[]',
            'is_collection' => true,
            'is_dataprovider' => false,
            'isCamelCase' => false,
            'singleton' => 'SocialMediaLink',
            'singleton_type' => '\\App\\Generated\\DataTransferObjects\\SocialMediaLinkDataProvider',
          ),
          'placeHolder' =>
          array (
            'name' => 'placeHolder',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'buttonTitle' =>
          array (
            'name' => 'buttonTitle',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
        );
    }
}
