<?php
declare(strict_types=1);
namespace App\Generated\DataTransferObjects;

/**
 * Auto generated data provider
 */
final class HeaderDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var string */
    protected $title;


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }


    /**
     * @param string $title
     * @return HeaderDataProvider
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }


    /**
     * @return HeaderDataProvider
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
        );
    }
}
