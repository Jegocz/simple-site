<?php
declare(strict_types=1);
namespace App\Generated\DataTransferObjects;

/**
 * Auto generated data provider
 */
final class PageViewDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var string */
    protected $name;

    /** @var \App\Generated\DataTransferObjects\HeaderDataProvider */
    protected $header;

    /** @var \App\Generated\DataTransferObjects\NavigationDataProvider */
    protected $navigation;

    /** @var \App\Generated\DataTransferObjects\MastHeadDataProvider */
    protected $mastHead;

    /** @var \App\Generated\DataTransferObjects\SectionDataProvider[] */
    protected $sections = [];


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @param string $name
     * @return PageViewDataProvider
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }


    /**
     * @return PageViewDataProvider
     */
    public function unsetName()
    {
        $this->name = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasName()
    {
        return ($this->name !== null && $this->name !== []);
    }


    /**
     * @return \App\Generated\DataTransferObjects\HeaderDataProvider
     */
    public function getHeader(): HeaderDataProvider
    {
        return $this->header;
    }


    /**
     * @param \App\Generated\DataTransferObjects\HeaderDataProvider $header
     * @return PageViewDataProvider
     */
    public function setHeader(HeaderDataProvider $header)
    {
        $this->header = $header;

        return $this;
    }


    /**
     * @return PageViewDataProvider
     */
    public function unsetHeader()
    {
        $this->header = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasHeader()
    {
        return ($this->header !== null && $this->header !== []);
    }


    /**
     * @return \App\Generated\DataTransferObjects\NavigationDataProvider
     */
    public function getNavigation(): NavigationDataProvider
    {
        return $this->navigation;
    }


    /**
     * @param \App\Generated\DataTransferObjects\NavigationDataProvider $navigation
     * @return PageViewDataProvider
     */
    public function setNavigation(NavigationDataProvider $navigation)
    {
        $this->navigation = $navigation;

        return $this;
    }


    /**
     * @return PageViewDataProvider
     */
    public function unsetNavigation()
    {
        $this->navigation = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasNavigation()
    {
        return ($this->navigation !== null && $this->navigation !== []);
    }


    /**
     * @return \App\Generated\DataTransferObjects\MastHeadDataProvider
     */
    public function getMastHead(): MastHeadDataProvider
    {
        return $this->mastHead;
    }


    /**
     * @param \App\Generated\DataTransferObjects\MastHeadDataProvider $mastHead
     * @return PageViewDataProvider
     */
    public function setMastHead(MastHeadDataProvider $mastHead)
    {
        $this->mastHead = $mastHead;

        return $this;
    }


    /**
     * @return PageViewDataProvider
     */
    public function unsetMastHead()
    {
        $this->mastHead = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasMastHead()
    {
        return ($this->mastHead !== null && $this->mastHead !== []);
    }


    /**
     * @return \App\Generated\DataTransferObjects\SectionDataProvider[]
     */
    public function getSections(): array
    {
        return $this->sections;
    }


    /**
     * @param \App\Generated\DataTransferObjects\SectionDataProvider[] $sections
     * @return PageViewDataProvider
     */
    public function setSections(array $sections)
    {
        $this->sections = $sections;

        return $this;
    }


    /**
     * @return PageViewDataProvider
     */
    public function unsetSections()
    {
        $this->sections = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasSections()
    {
        return ($this->sections !== null && $this->sections !== []);
    }


    /**
     * @param \App\Generated\DataTransferObjects\SectionDataProvider $Section
     * @return PageViewDataProvider
     */
    public function addSection(SectionDataProvider $Section)
    {
        $this->sections[] = $Section; return $this;
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
          'name' =>
          array (
            'name' => 'name',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'header' =>
          array (
            'name' => 'header',
            'allownull' => false,
            'default' => '',
            'type' => '\\App\\Generated\\DataTransferObjects\\HeaderDataProvider',
            'is_collection' => false,
            'is_dataprovider' => true,
            'isCamelCase' => false,
          ),
          'navigation' =>
          array (
            'name' => 'navigation',
            'allownull' => false,
            'default' => '',
            'type' => '\\App\\Generated\\DataTransferObjects\\NavigationDataProvider',
            'is_collection' => false,
            'is_dataprovider' => true,
            'isCamelCase' => false,
          ),
          'mastHead' =>
          array (
            'name' => 'mastHead',
            'allownull' => false,
            'default' => '',
            'type' => '\\App\\Generated\\DataTransferObjects\\MastHeadDataProvider',
            'is_collection' => false,
            'is_dataprovider' => true,
            'isCamelCase' => false,
          ),
          'sections' =>
          array (
            'name' => 'sections',
            'allownull' => false,
            'default' => '',
            'type' => '\\App\\Generated\\DataTransferObjects\\SectionDataProvider[]',
            'is_collection' => true,
            'is_dataprovider' => false,
            'isCamelCase' => false,
            'singleton' => 'Section',
            'singleton_type' => '\\App\\Generated\\DataTransferObjects\\SectionDataProvider',
          ),
        );
    }
}
