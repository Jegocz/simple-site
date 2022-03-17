<?php declare(strict_types=1);

namespace App\Admin\Section;

interface SectionDependencyProviderInterface
{
    /**
     * @return \App\Admin\Section\DependencyInjection\Plugin\SectionMapperDependencyPluginInterface[]
     */
    public function getSectionMapperPlugins(): array;
}
