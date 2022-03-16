<?php
declare(strict_types=1);
namespace App\Generated\DataTransferObjects;

/**
 * Auto generated data provider
 */
final class NavigationDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var string */
    protected $textLeft;

    /** @var string */
    protected $menuTitle;

    /** @var \App\Generated\DataTransferObjects\NavigationLinkDataProvider[] */
    protected $navigationLinks = [];


    /**
     * @return string
     */
    public function getTextLeft(): string
    {
        return $this->textLeft;
    }


    /**
     * @param string $textLeft
     * @return NavigationDataProvider
     */
    public function setTextLeft(string $textLeft)
    {
        $this->textLeft = $textLeft;

        return $this;
    }


    /**
     * @return NavigationDataProvider
     */
    public function unsetTextLeft()
    {
        $this->textLeft = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasTextLeft()
    {
        return ($this->textLeft !== null && $this->textLeft !== []);
    }


    /**
     * @return string
     */
    public function getMenuTitle(): string
    {
        return $this->menuTitle;
    }


    /**
     * @param string $menuTitle
     * @return NavigationDataProvider
     */
    public function setMenuTitle(string $menuTitle)
    {
        $this->menuTitle = $menuTitle;

        return $this;
    }


    /**
     * @return NavigationDataProvider
     */
    public function unsetMenuTitle()
    {
        $this->menuTitle = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasMenuTitle()
    {
        return ($this->menuTitle !== null && $this->menuTitle !== []);
    }


    /**
     * @return \App\Generated\DataTransferObjects\NavigationLinkDataProvider[]
     */
    public function getNavigationLinks(): array
    {
        return $this->navigationLinks;
    }


    /**
     * @param \App\Generated\DataTransferObjects\NavigationLinkDataProvider[] $navigationLinks
     * @return NavigationDataProvider
     */
    public function setNavigationLinks(array $navigationLinks)
    {
        $this->navigationLinks = $navigationLinks;

        return $this;
    }


    /**
     * @return NavigationDataProvider
     */
    public function unsetNavigationLinks()
    {
        $this->navigationLinks = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasNavigationLinks()
    {
        return ($this->navigationLinks !== null && $this->navigationLinks !== []);
    }


    /**
     * @param \App\Generated\DataTransferObjects\NavigationLinkDataProvider $NavigationLink
     * @return NavigationDataProvider
     */
    public function addNavigationLink(NavigationLinkDataProvider $NavigationLink)
    {
        $this->navigationLinks[] = $NavigationLink; return $this;
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
          'textLeft' =>
          array (
            'name' => 'textLeft',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'menuTitle' =>
          array (
            'name' => 'menuTitle',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'navigationLinks' =>
          array (
            'name' => 'navigationLinks',
            'allownull' => false,
            'default' => '',
            'type' => '\\App\\Generated\\DataTransferObjects\\NavigationLinkDataProvider[]',
            'is_collection' => true,
            'is_dataprovider' => false,
            'isCamelCase' => false,
            'singleton' => 'NavigationLink',
            'singleton_type' => '\\App\\Generated\\DataTransferObjects\\NavigationLinkDataProvider',
          ),
        );
    }
}
