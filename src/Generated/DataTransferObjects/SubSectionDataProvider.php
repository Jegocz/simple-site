<?php
declare(strict_types=1);
namespace App\Generated\DataTransferObjects;

/**
 * Auto generated data provider
 */
final class SubSectionDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var string */
    protected $title;

    /** @var string */
    protected $text;

    /** @var bool */
    protected $isLink = false;

    /** @var string */
    protected $image;

    /** @var bool */
    protected $imageAlignLeft;

    /** @var string */
    protected $icon;


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }


    /**
     * @param string $title
     * @return SubSectionDataProvider
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }


    /**
     * @return SubSectionDataProvider
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
     * @return SubSectionDataProvider
     */
    public function setText(string $text)
    {
        $this->text = $text;

        return $this;
    }


    /**
     * @return SubSectionDataProvider
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
     * @return bool
     */
    public function getIsLink(): bool
    {
        return $this->isLink;
    }


    /**
     * @param bool $isLink
     * @return SubSectionDataProvider
     */
    public function setIsLink(bool $isLink = false)
    {
        $this->isLink = $isLink;

        return $this;
    }


    /**
     * @return SubSectionDataProvider
     */
    public function unsetIsLink()
    {
        $this->isLink = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasIsLink()
    {
        return ($this->isLink !== null && $this->isLink !== []);
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
     * @return SubSectionDataProvider
     */
    public function setImage(string $image)
    {
        $this->image = $image;

        return $this;
    }


    /**
     * @return SubSectionDataProvider
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
     * @return bool
     */
    public function getImageAlignLeft(): bool
    {
        return $this->imageAlignLeft;
    }


    /**
     * @param bool $imageAlignLeft
     * @return SubSectionDataProvider
     */
    public function setImageAlignLeft(bool $imageAlignLeft)
    {
        $this->imageAlignLeft = $imageAlignLeft;

        return $this;
    }


    /**
     * @return SubSectionDataProvider
     */
    public function unsetImageAlignLeft()
    {
        $this->imageAlignLeft = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasImageAlignLeft()
    {
        return ($this->imageAlignLeft !== null && $this->imageAlignLeft !== []);
    }


    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }


    /**
     * @param string $icon
     * @return SubSectionDataProvider
     */
    public function setIcon(string $icon)
    {
        $this->icon = $icon;

        return $this;
    }


    /**
     * @return SubSectionDataProvider
     */
    public function unsetIcon()
    {
        $this->icon = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasIcon()
    {
        return ($this->icon !== null && $this->icon !== []);
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
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
          'isLink' =>
          array (
            'name' => 'isLink',
            'allownull' => false,
            'default' => 'false',
            'type' => 'bool',
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
          'imageAlignLeft' =>
          array (
            'name' => 'imageAlignLeft',
            'allownull' => false,
            'default' => '',
            'type' => 'bool',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'icon' =>
          array (
            'name' => 'icon',
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
