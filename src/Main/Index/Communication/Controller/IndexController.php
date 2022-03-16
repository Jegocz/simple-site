<?php

namespace App\Main\Index\Communication\Controller;

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

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $pageViewTransfer = new PageViewDataProvider();
        $pageViewTransfer->setName(self::ROUTE_NAME);

        $headerTransfer = new HeaderDataProvider();
        $headerTransfer->setTitle('Grayscale - Start Bootstrap Theme');

        $pageViewTransfer->setHeader($headerTransfer);

        $navigationTransfer = new NavigationDataProvider();
        $navigationTransfer->setMenuTitle('Menu');
        $navigationTransfer->setTextLeft('Start Bootstrap');

        $navigationLinkTransfer1 = new NavigationLinkDataProvider();
        $navigationLinkTransfer1->setDisplayName('About');
        $navigationLinkTransfer1->setLink('about');

        $navigationLinkTransfer2 = new NavigationLinkDataProvider();
        $navigationLinkTransfer2->setDisplayName('Projects');
        $navigationLinkTransfer2->setLink('projects');

        $navigationLinkTransfer3 = new NavigationLinkDataProvider();
        $navigationLinkTransfer3->setDisplayName('Contact');
        $navigationLinkTransfer3->setLink('contact');

        $navigationTransfer->addNavigationLink($navigationLinkTransfer1);
        $navigationTransfer->addNavigationLink($navigationLinkTransfer2);
        $navigationTransfer->addNavigationLink($navigationLinkTransfer3);

        $pageViewTransfer->setNavigation($navigationTransfer);

        $mastHeadTransfer = new MastHeadDataProvider();
        $mastHeadTransfer->setLink('about');
        $mastHeadTransfer->setTitle('Grayscale');
        $mastHeadTransfer->setButtonTitle('Get Started');
        $mastHeadTransfer->setSubTitle('A free, responsive, one page Bootstrap theme created by Start Bootstrap.');

        $pageViewTransfer->setMastHead($mastHeadTransfer);

        $sectionTransfer1 = new SectionDataProvider();
        $sectionTransfer1->setType(PageSectionConstants::SECTION_1_TYPE);
        $sectionTransfer1->setTemplateId('about');
        $sectionTransfer1->setTitle('Built with Bootstrap 5');
        $sectionTransfer1->setText('Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
                                <a href="https://startbootstrap.com/theme/grayscale/">the preview page.</a>
                                The theme is open source, and you can use it for any purpose, personal or commercial.');
        $sectionTransfer1->setImage('/assets/img/ipad.png');

        $pageViewTransfer->addSection($sectionTransfer1);

        $sectionTransfer2 = new SectionDataProvider();
        $sectionTransfer2->setType(PageSectionConstants::SECTION_2_TYPE);
        $sectionTransfer2->setTemplateId('projects');
        $sectionTransfer2->setTitle('Shoreline');
        $sectionTransfer2->setText('Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!');
        $sectionTransfer2->setImage('/assets/img/bg-masthead.jpg');

        $subSectionTransfer1 = new SubSectionDataProvider();
        $subSectionTransfer1->setText('An example of where you can put an image of a project, or anything else, along with a description.');
        $subSectionTransfer1->setImage('/assets/img/demo-image-01.jpg');
        $subSectionTransfer1->setTitle('Misty');
        $subSectionTransfer1->setImageAlignLeft(true);

        $sectionTransfer2->addSubSection($subSectionTransfer1);

        $subSectionTransfer2 = new SubSectionDataProvider();
        $subSectionTransfer2->setText('Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!');
        $subSectionTransfer2->setImage('/assets/img/demo-image-02.jpg');
        $subSectionTransfer2->setTitle('Mountains');
        $subSectionTransfer2->setImageAlignLeft(false);

        $sectionTransfer2->addSubSection($subSectionTransfer2);

        $pageViewTransfer->addSection($sectionTransfer2);

        $sectionTransfer3 = new SectionDataProvider();
        $sectionTransfer3->setType(PageSectionConstants::SECTION_NEWSLETTER_TYPE);
        $sectionTransfer3->setTemplateId('newsletter');
        $sectionTransfer3->setTitle('Subscribe to receive updates!');
        $sectionTransfer3->setPlaceHolder('Enter email address...');
        $sectionTransfer3->setButtonTitle('Notify Me!');

        $pageViewTransfer->addSection($sectionTransfer3);

        $sectionTransfer4 = new SectionDataProvider();
        $sectionTransfer4->setType(PageSectionConstants::SECTION_CONTACT_TYPE);
        $sectionTransfer4->setTemplateId('contact');

        $subSectionTransfer3 = new SubSectionDataProvider();
        $subSectionTransfer3->setTitle('Address');
        $subSectionTransfer3->setText('4923 Market Street, Orlando FL');
        $subSectionTransfer3->setIcon(IconsConstants::ADDRESS_ICON);

        $sectionTransfer4->addSubSection($subSectionTransfer3);

        $subSectionTransfer4 = new SubSectionDataProvider();
        $subSectionTransfer4->setTitle('Email');
        $subSectionTransfer4->setText('hello@yourdomain.com');
        $subSectionTransfer4->setIsLink(true);
        $subSectionTransfer4->setIcon(IconsConstants::MAIL_ICON);

        $sectionTransfer4->addSubSection($subSectionTransfer4);

        $subSectionTransfer5 = new SubSectionDataProvider();
        $subSectionTransfer5->setTitle('Phone');
        $subSectionTransfer5->setText('+1 (555) 902-8832');
        $subSectionTransfer5->setIcon(IconsConstants::PHONE_ICON);

        $sectionTransfer4->addSubSection($subSectionTransfer5);

        $pageViewTransfer->addSection($sectionTransfer4);

        $sectionTransfer5 = new SectionDataProvider();
        $sectionTransfer5->setType(PageSectionConstants::SECTION_SOCIAL_MEDIA_TYPE);
        $sectionTransfer5->setTemplateId('social-media');

        $socialMediaTransfer1 = new SocialMediaLinkDataProvider();
        $socialMediaTransfer1->setIcon(IconsConstants::SOCIAL_MEDIA_TWITTER_ICON);
        $socialMediaTransfer1->setLink('https://twitter.com');

        $sectionTransfer5->addSocialMediaLink($socialMediaTransfer1);

        $socialMediaTransfer2 = new SocialMediaLinkDataProvider();
        $socialMediaTransfer2->setIcon(IconsConstants::SOCIAL_MEDIA_GITHUB_ICON);
        $socialMediaTransfer2->setLink('https://github.com');

        $sectionTransfer5->addSocialMediaLink($socialMediaTransfer2);

        $socialMediaTransfer3 = new SocialMediaLinkDataProvider();
        $socialMediaTransfer3->setIcon(IconsConstants::SOCIAL_MEDIA_FACEBOOK_ICON);
        $socialMediaTransfer3->setLink('https://www.facebook.com');

        $sectionTransfer5->addSocialMediaLink($socialMediaTransfer3);

        $socialMediaTransfer4 = new SocialMediaLinkDataProvider();
        $socialMediaTransfer4->setIcon(IconsConstants::SOCIAL_MEDIA_INSTAGRAM_ICON);
        $socialMediaTransfer4->setLink('https://www.instagram.com');

        $sectionTransfer5->addSocialMediaLink($socialMediaTransfer4);

        $pageViewTransfer->addSection($sectionTransfer5);

        return $this->render(RouterConstants::INDEX_ROUTE,
            [
                'page' => $pageViewTransfer,
            ]
        );
    }
}
