<?php declare(strict_types=1);

namespace App\Client\PageView;

use App\Admin\PageView\Business\PageViewFacadeInterface;
use App\Generated\DataTransferObjects\PageViewDataProvider;

class PageViewClient implements PageViewClientInterface
{
    /**
     * @var \App\Admin\PageView\Business\PageViewFacadeInterface
     */
    private PageViewFacadeInterface $pageViewFacade;

    /**
     * @param \App\Admin\PageView\Business\PageViewFacadeInterface $pageViewFacade
     */
    public function __construct(PageViewFacadeInterface $pageViewFacade)
    {
        $this->pageViewFacade = $pageViewFacade;
    }

    /**
     * @param string $name
     *
     * @return \App\Generated\DataTransferObjects\PageViewDataProvider
     * @throws \App\Admin\PageView\Business\Exception\PageViewNotFoundException
     */
    public function getPageViewByName(string $name): PageViewDataProvider
    {
        return $this->pageViewFacade->getPageViewByName($name);
    }
}
