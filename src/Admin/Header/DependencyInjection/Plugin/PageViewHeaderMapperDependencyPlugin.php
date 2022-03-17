<?php declare(strict_types=1);

namespace App\Admin\Header\DependencyInjection\Plugin;

use App\Admin\Header\Persistence\Mapper\HeaderMapperInterface;
use App\Admin\PageView\DependencyInjection\Plugin\PageViewMapperDependencyPluginInterface;
use App\Generated\DataTransferObjects\HeaderDataProvider;
use App\Generated\DataTransferObjects\PageViewDataProvider;
use App\Generated\Entity\PageView;

class PageViewHeaderMapperDependencyPlugin implements PageViewMapperDependencyPluginInterface
{
    /**
     * @var \App\Admin\Header\Persistence\Mapper\HeaderMapperInterface
     */
    private HeaderMapperInterface $headerMapper;

    /**
     * @param \App\Admin\Header\Persistence\Mapper\HeaderMapperInterface $headerMapper
     */
    public function __construct(HeaderMapperInterface $headerMapper)
    {
        $this->headerMapper = $headerMapper;
    }

    /**
     * @param \App\Generated\Entity\PageView $pageViewEntity
     * @param \App\Generated\DataTransferObjects\PageViewDataProvider $pageViewDataProvider
     *
     * @return \App\Generated\DataTransferObjects\PageViewDataProvider
     */
    public function mapFromPageView(PageView $pageViewEntity, PageViewDataProvider $pageViewDataProvider): PageViewDataProvider
    {
        $headerDataProvider = ($this->headerMapper)($pageViewEntity->getHeader(), new HeaderDataProvider());

        return $pageViewDataProvider->setHeader($headerDataProvider);
    }
}
