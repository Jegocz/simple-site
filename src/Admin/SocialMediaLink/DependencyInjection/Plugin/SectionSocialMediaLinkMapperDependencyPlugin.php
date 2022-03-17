<?php declare(strict_types=1);

namespace App\Admin\SocialMediaLink\DependencyInjection\Plugin;

use App\Admin\Section\DependencyInjection\Plugin\SectionMapperDependencyPluginInterface;
use App\Admin\SocialMediaLink\Persistence\Mapper\SocialMediaLinkMapperInterface;
use App\Generated\DataTransferObjects\SectionDataProvider;
use App\Generated\DataTransferObjects\SocialMediaLinkDataProvider;
use App\Generated\Entity\Section;

class SectionSocialMediaLinkMapperDependencyPlugin implements SectionMapperDependencyPluginInterface
{
    /**
     * @var \App\Admin\SocialMediaLink\Persistence\Mapper\SocialMediaLinkMapperInterface
     */
    private SocialMediaLinkMapperInterface $socialMediaLinkMapper;

    /**
     * @param \App\Admin\SocialMediaLink\Persistence\Mapper\SocialMediaLinkMapperInterface $socialMediaLinkMapper
     */
    public function __construct(SocialMediaLinkMapperInterface $socialMediaLinkMapper)
    {
        $this->socialMediaLinkMapper = $socialMediaLinkMapper;
    }

    /**
     * @param \App\Generated\Entity\Section $sectionEntity
     * @param \App\Generated\DataTransferObjects\SectionDataProvider $sectionDataProvider
     *
     * @return \App\Generated\DataTransferObjects\SectionDataProvider
     */
    public function mapFromSection(Section $sectionEntity, SectionDataProvider $sectionDataProvider): SectionDataProvider
    {
        foreach ($sectionEntity->getSocialMediaLinks() as $socialMediaLinkEntity) {
            $sectionDataProvider->addSocialMediaLink(($this->socialMediaLinkMapper)($socialMediaLinkEntity, new SocialMediaLinkDataProvider()));
        }

        $sectionDataProvider->setSocialMediaLinks($this->sortSocialMediaLinks($sectionDataProvider->getSocialMediaLinks()));

        return $sectionDataProvider;
    }

    /**
     * @param \App\Generated\DataTransferObjects\SocialMediaLinkDataProvider[] $socialMediaLinks
     *
     * @return array
     */
    private function sortSocialMediaLinks(array $socialMediaLinks): array
    {
        usort($socialMediaLinks,function(SocialMediaLinkDataProvider $first, SocialMediaLinkDataProvider $second){
            return $first->getPosition() > $second->getPosition();
        });

        return $socialMediaLinks;
    }
}
