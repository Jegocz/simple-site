<?php declare(strict_types=1);

namespace App\Admin\Section;

use App\Admin\SocialMediaLink\DependencyInjection\Plugin\SectionSocialMediaLinkMapperDependencyPlugin;
use App\Admin\SubSection\DependencyInjection\Plugin\SectionSubSectionMapperDependencyPlugin;

class SectionDependencyProvider implements SectionDependencyProviderInterface
{
    /**
     * @var \App\Admin\SubSection\DependencyInjection\Plugin\SectionSubSectionMapperDependencyPlugin
     */
    private SectionSubSectionMapperDependencyPlugin $sectionSubSectionMapperDependencyPlugin;
    /**
     * @var \App\Admin\SocialMediaLink\DependencyInjection\Plugin\SectionSocialMediaLinkMapperDependencyPlugin
     */
    private SectionSocialMediaLinkMapperDependencyPlugin $sectionSocialMediaLinkMapperDependencyPlugin;

    /**
     * @param \App\Admin\SubSection\DependencyInjection\Plugin\SectionSubSectionMapperDependencyPlugin $sectionSubSectionMapperDependencyPlugin
     * @param \App\Admin\SocialMediaLink\DependencyInjection\Plugin\SectionSocialMediaLinkMapperDependencyPlugin $sectionSocialMediaLinkMapperDependencyPlugin
     */
    public function __construct(
        SectionSubSectionMapperDependencyPlugin $sectionSubSectionMapperDependencyPlugin,
        SectionSocialMediaLinkMapperDependencyPlugin $sectionSocialMediaLinkMapperDependencyPlugin
    ) {
        $this->sectionSubSectionMapperDependencyPlugin = $sectionSubSectionMapperDependencyPlugin;
        $this->sectionSocialMediaLinkMapperDependencyPlugin = $sectionSocialMediaLinkMapperDependencyPlugin;
    }

    /**
     * @return \App\Admin\Section\DependencyInjection\Plugin\SectionMapperDependencyPluginInterface[]
     */
    public function getSectionMapperPlugins(): array
    {
        return [
            $this->sectionSubSectionMapperDependencyPlugin,
            $this->sectionSocialMediaLinkMapperDependencyPlugin,
        ];
    }
}
