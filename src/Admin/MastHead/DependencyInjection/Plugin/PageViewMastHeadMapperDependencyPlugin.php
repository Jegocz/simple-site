<?php declare(strict_types=1);

namespace App\Admin\MastHead\DependencyInjection\Plugin;

use App\Admin\MastHead\Persistence\Mapper\MastHeadMapperInterface;
use App\Admin\PageView\DependencyInjection\Plugin\PageViewMapperDependencyPluginInterface;
use App\Generated\DataTransferObjects\MastHeadDataProvider;
use App\Generated\DataTransferObjects\PageViewDataProvider;
use App\Generated\Entity\PageView;

class PageViewMastHeadMapperDependencyPlugin implements PageViewMapperDependencyPluginInterface
{
    /**
     * @var \App\Admin\MastHead\Persistence\Mapper\MastHeadMapperInterface
     */
    private MastHeadMapperInterface $mastHeadMapper;

    /**
     * @param \App\Admin\MastHead\Persistence\Mapper\MastHeadMapperInterface $mastHeadMapper
     */
    public function __construct(MastHeadMapperInterface $mastHeadMapper)
    {
        $this->mastHeadMapper = $mastHeadMapper;
    }

    /**
     * @param \App\Generated\Entity\PageView $pageViewEntity
     * @param \App\Generated\DataTransferObjects\PageViewDataProvider $pageViewDataProvider
     *
     * @return \App\Generated\DataTransferObjects\PageViewDataProvider
     */
    public function mapFromPageView(PageView $pageViewEntity, PageViewDataProvider $pageViewDataProvider): PageViewDataProvider
    {
        $mastHeadDataProvider = ($this->mastHeadMapper)($pageViewEntity->getMastHead(), new MastHeadDataProvider());

        return $pageViewDataProvider->setMastHead($mastHeadDataProvider);
    }
}
