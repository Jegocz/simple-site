<?php declare(strict_types=1);

namespace App\Admin\PageView\Business;

use App\Admin\PageView\Business\Model\PageViewInterface;
use App\Generated\DataTransferObjects\PageViewDataProvider;

class PageViewFacade implements PageViewFacadeInterface
{
    /**
     * @var \App\Admin\PageView\Business\Model\PageViewInterface
     */
    private PageViewInterface $pageView;

    /**
     * @param \App\Admin\PageView\Business\Model\PageViewInterface $pageView
     */
    public function __construct(PageViewInterface $pageView)
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
