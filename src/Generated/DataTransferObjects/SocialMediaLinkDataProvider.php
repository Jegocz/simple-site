<?php
declare(strict_types=1);
namespace App\Generated\DataTransferObjects;

/**
 * Auto generated data provider
 */
final class SocialMediaLinkDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var string */
    protected $link;

    /** @var string */
    protected $icon;


    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }


    /**
     * @param string $link
     * @return SocialMediaLinkDataProvider
     */
    public function setLink(string $link)
    {
        $this->link = $link;

        return $this;
    }


    /**
     * @return SocialMediaLinkDataProvider
     */
    public function unsetLink()
    {
        $this->link = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasLink()
    {
        return ($this->link !== null && $this->link !== []);
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
     * @return SocialMediaLinkDataProvider
     */
    public function setIcon(string $icon)
    {
        $this->icon = $icon;

        return $this;
    }


    /**
     * @return SocialMediaLinkDataProvider
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
          'link' =>
          array (
            'name' => 'link',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
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
