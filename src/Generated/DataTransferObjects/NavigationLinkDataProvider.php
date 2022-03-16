<?php
declare(strict_types=1);
namespace App\Generated\DataTransferObjects;

/**
 * Auto generated data provider
 */
final class NavigationLinkDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var string */
    protected $link;

    /** @var string */
    protected $displayName;


    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }


    /**
     * @param string $link
     * @return NavigationLinkDataProvider
     */
    public function setLink(string $link)
    {
        $this->link = $link;

        return $this;
    }


    /**
     * @return NavigationLinkDataProvider
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
    public function getDisplayName(): string
    {
        return $this->displayName;
    }


    /**
     * @param string $displayName
     * @return NavigationLinkDataProvider
     */
    public function setDisplayName(string $displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }


    /**
     * @return NavigationLinkDataProvider
     */
    public function unsetDisplayName()
    {
        $this->displayName = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasDisplayName()
    {
        return ($this->displayName !== null && $this->displayName !== []);
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
          'displayName' =>
          array (
            'name' => 'displayName',
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
