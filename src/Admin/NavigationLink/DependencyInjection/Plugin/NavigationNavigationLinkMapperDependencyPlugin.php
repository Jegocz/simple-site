<?php declare(strict_types=1);

namespace App\Admin\NavigationLink\DependencyInjection\Plugin;

use App\Admin\Navigation\DependencyInjection\Plugin\NavigationMapperDependencyPluginInterface;
use App\Admin\NavigationLink\Persistence\Mapper\NavigationLinkMapperInterface;
use App\Generated\DataTransferObjects\NavigationDataProvider;
use App\Generated\DataTransferObjects\NavigationLinkDataProvider;
use App\Generated\Entity\Navigation;

class NavigationNavigationLinkMapperDependencyPlugin implements NavigationMapperDependencyPluginInterface
{
    /**
     * @var \App\Admin\NavigationLink\Persistence\Mapper\NavigationLinkMapperInterface
     */
    private NavigationLinkMapperInterface $navigationLinkMapper;

    /**
     * @param \App\Admin\NavigationLink\Persistence\Mapper\NavigationLinkMapperInterface $navigationLinkMapper
     */
    public function __construct(NavigationLinkMapperInterface $navigationLinkMapper)
    {
        $this->navigationLinkMapper = $navigationLinkMapper;
    }

    /**
     * @param \App\Generated\Entity\Navigation $navigationEntity
     * @param \App\Generated\DataTransferObjects\NavigationDataProvider $navigationDataProvider
     *
     * @return \App\Generated\DataTransferObjects\NavigationDataProvider
     */
    public function mapFromNavigation(Navigation $navigationEntity, NavigationDataProvider $navigationDataProvider): NavigationDataProvider
    {
        foreach ($navigationEntity->getNavigationLinks() as $navigationLinkEntity) {
            $navigationDataProvider->addNavigationLink(($this->navigationLinkMapper)($navigationLinkEntity, new NavigationLinkDataProvider()));
        }

        $navigationDataProvider->setNavigationLinks($this->sortNavigationLinks($navigationDataProvider->getNavigationLinks()));

        return $navigationDataProvider;
    }

    /**
     * @param \App\Generated\DataTransferObjects\NavigationLinkDataProvider[] $navigationLinks
     *
     * @return array
     */
    private function sortNavigationLinks(array $navigationLinks): array
    {
        usort($navigationLinks,function(NavigationLinkDataProvider $first, NavigationLinkDataProvider $second){
            return $first->getPosition() > $second->getPosition();
        });

        return $navigationLinks;
    }
}
