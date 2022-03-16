<?php declare(strict_types=1);

namespace App\Admin\PageView\Business;

use App\Admin\PageView\Business\Model\PageView;
use App\Generated\DataTransferObjects\PageViewDataProvider;

class PageViewFacade
{
    /**
     * @var \App\Admin\PageView\Business\Model\PageView
     */
    private PageView $pageView;

    /**
     * @param \App\Admin\PageView\Business\Model\PageView $pageView
     */
    public function __construct(PageView $pageView)
    {
        $this->pageView = $pageView;
    }

    /**
     * @param string $name
     *
     * @return \App\Generated\DataTransferObjects\PageViewDataProvider
     * @throws \App\Admin\PageView\Business\Exception\PageViewNotFoundException
     */
    public function getPageViewByName(string $name): PageViewDataProvider
    {
        return $this->pageView->getPageViewByName($name);
    }
}
