<?php

namespace App\Main\Index\Communication\Controller;

use App\Client\PageView\PageViewClientInterface;
use App\Generated\DataTransferObjects\HeaderDataProvider;
use App\Generated\DataTransferObjects\MastHeadDataProvider;
use App\Generated\DataTransferObjects\NavigationDataProvider;
use App\Generated\DataTransferObjects\NavigationLinkDataProvider;
use App\Generated\DataTransferObjects\PageViewDataProvider;
use App\Generated\DataTransferObjects\SectionDataProvider;
use App\Generated\DataTransferObjects\SocialMediaLinkDataProvider;
use App\Generated\DataTransferObjects\SubSectionDataProvider;
use App\Shared\Icons\IconsConstants;
use App\Shared\PageSection\PageSectionConstants;
use App\Shared\Router\RouterConstants;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    private const ROUTE_NAME = 'index';
    /**
     * @var \App\Client\PageView\PageViewClientInterface
     */
    private PageViewClientInterface $pageViewClient;

    /**
     * @param \App\Client\PageView\PageViewClientInterface $pageViewClient
     */
    public function __construct(PageViewClientInterface $pageViewClient)
    {
        $this->pageViewClient = $pageViewClient;
    }

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $pageViewTransfer = $this->pageViewClient->getPageViewByName(self::ROUTE_NAME);

        return $this->render(RouterConstants::INDEX_ROUTE,
            [
                'page' => $pageViewTransfer,
            ]
        );
    }
}
