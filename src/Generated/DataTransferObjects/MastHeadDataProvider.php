<?php
declare(strict_types=1);
namespace App\Generated\DataTransferObjects;

/**
 * Auto generated data provider
 */
final class MastHeadDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var string */
    protected $title;

    /** @var string */
    protected $subTitle;

    /** @var string */
    protected $link;

    /** @var string */
    protected $buttonTitle;


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }


    /**
     * @param string $title
     * @return MastHeadDataProvider
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }


    /**
     * @return MastHeadDataProvider
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
    public function getSubTitle(): string
    {
        return $this->subTitle;
    }


    /**
     * @param string $subTitle
     * @return MastHeadDataProvider
     */
    public function setSubTitle(string $subTitle)
    {
        $this->subTitle = $subTitle;

        return $this;
    }


    /**
     * @return MastHeadDataProvider
     */
    public function unsetSubTitle()
    {
        $this->subTitle = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasSubTitle()
    {
        return ($this->subTitle !== null && $this->subTitle !== []);
    }


    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }


    /**
     * @param string $link
     * @return MastHeadDataProvider
     */
    public function setLink(string $link)
    {
        $this->link = $link;

        return $this;
    }


    /**
     * @return MastHeadDataProvider
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
    public function getButtonTitle(): string
    {
        return $this->buttonTitle;
    }


    /**
     * @param string $buttonTitle
     * @return MastHeadDataProvider
     */
    public function setButtonTitle(string $buttonTitle)
    {
        $this->buttonTitle = $buttonTitle;

        return $this;
    }


    /**
     * @return MastHeadDataProvider
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
          'subTitle' =>
          array (
            'name' => 'subTitle',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
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
