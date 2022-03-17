<?php declare(strict_types=1);

namespace App\Admin\PageView;

use App\Admin\Header\DependencyInjection\Plugin\PageViewHeaderMapperDependencyPlugin;
use App\Admin\MastHead\DependencyInjection\Plugin\PageViewMastHeadMapperDependencyPlugin;
use App\Admin\Navigation\DependencyInjection\Plugin\PageViewNavigationMapperDependencyPlugin;
use App\Admin\Section\DependencyInjection\Plugin\PageViewSectionMapperDependencyPlugin;

class PageViewDependencyProvider implements PageViewDependencyProviderInterface
{
    /**
     * @var \App\Admin\Header\DependencyInjection\Plugin\PageViewHeaderMapperDependencyPlugin
     */
    private PageViewHeaderMapperDependencyPlugin $pageViewHeaderMapperDependencyPlugin;
    /**
     * @var \App\Admin\Navigation\DependencyInjection\Plugin\PageViewNavigationMapperDependencyPlugin
     */
    private PageViewNavigationMapperDependencyPlugin $pageViewNavigationMapperDependencyPlugin;
    /**
     * @var \App\Admin\MastHead\DependencyInjection\Plugin\PageViewMastHeadMapperDependencyPlugin
     */
    private PageViewMastHeadMapperDependencyPlugin $pageViewMastHeadMapperDependencyPlugin;
    /**
     * @var \App\Admin\Section\DependencyInjection\Plugin\PageViewSectionMapperDependencyPlugin
     */
    private PageViewSectionMapperDependencyPlugin $pageViewSectionMapperDependencyPlugin;

    /**
     * @param \App\Admin\Header\DependencyInjection\Plugin\PageViewHeaderMapperDependencyPlugin $pageViewHeaderMapperDependencyPlugin
     * @param \App\Admin\Navigation\DependencyInjection\Plugin\PageViewNavigationMapperDependencyPlugin $pageViewNavigationMapperDependencyPlugin
     * @param \App\Admin\MastHead\DependencyInjection\Plugin\PageViewMastHeadMapperDependencyPlugin $pageViewMastHeadMapperDependencyPlugin
     * @param \App\Admin\Section\DependencyInjection\Plugin\PageViewSectionMapperDependencyPlugin $pageViewSectionMapperDependencyPlugin
     */
    public function __construct(
        PageViewHeaderMapperDependencyPlugin $pageViewHeaderMapperDependencyPlugin,
        PageViewNavigationMapperDependencyPlugin $pageViewNavigationMapperDependencyPlugin,
        PageViewMastHeadMapperDependencyPlugin $pageViewMastHeadMapperDependencyPlugin,
        PageViewSectionMapperDependencyPlugin $pageViewSectionMapperDependencyPlugin
    ) {
        $this->pageViewHeaderMapperDependencyPlugin = $pageViewHeaderMapperDependencyPlugin;
        $this->pageViewNavigationMapperDependencyPlugin = $pageViewNavigationMapperDependencyPlugin;
        $this->pageViewMastHeadMapperDependencyPlugin = $pageViewMastHeadMapperDependencyPlugin;
        $this->pageViewSectionMapperDependencyPlugin = $pageViewSectionMapperDependencyPlugin;
    }

    /**
     * To use different mappers of objects in the pageView object
     *
     * @return \App\Admin\PageView\DependencyInjection\Plugin\PageViewMapperDependencyPluginInterface[]
     */
    public function getPageViewMapperPlugins(): array
    {
        return [
            $this->pageViewHeaderMapperDependencyPlugin,
            $this->pageViewNavigationMapperDependencyPlugin,
            $this->pageViewMastHeadMapperDependencyPlugin,
            $this->pageViewSectionMapperDependencyPlugin,
        ];
    }
}
