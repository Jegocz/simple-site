<?php declare(strict_types=1);

namespace App\Admin\PageView;

interface PageViewDependencyProviderInterface
{
    /**
     * @return \App\Admin\Header\DependencyInjection\Plugin\PageViewHeaderMapperDependencyPlugin[]
     */
    public function getPageViewMapperPlugins(): array;
}
