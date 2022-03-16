<?php declare(strict_types=1);

namespace App\Shared\PageSection;

interface PageSectionConstants
{
    public const SECTION_TYPES = [
        self::SECTION_1_TYPE,
        self::SECTION_2_TYPE,
        self::SECTION_CONTACT_TYPE,
        self::SECTION_NEWSLETTER_TYPE,
        self::SECTION_SOCIAL_MEDIA_TYPE,
    ];

    public const SECTION_1_TYPE = 'type1';
    public const SECTION_2_TYPE = 'type2';
    public const SECTION_CONTACT_TYPE = 'contact';
    public const SECTION_NEWSLETTER_TYPE = 'newsletter';
    public const SECTION_SOCIAL_MEDIA_TYPE = 'socialMedia';
}
