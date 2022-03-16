<?php declare(strict_types=1);

namespace App\Shared\Icons;

interface IconsConstants
{
    public const SOCIAL_MEDIA_ICONS = [
        self::SOCIAL_MEDIA_FACEBOOK_ICON,
        self::SOCIAL_MEDIA_GITHUB_ICON,
        self::SOCIAL_MEDIA_INSTAGRAM_ICON,
        self::SOCIAL_MEDIA_TWITTER_ICON,
    ];

    public const SOCIAL_MEDIA_FACEBOOK_ICON = 'fa-facebook-f';
    public const SOCIAL_MEDIA_GITHUB_ICON = 'fa-github';
    public const SOCIAL_MEDIA_INSTAGRAM_ICON = 'fa-instagram';
    public const SOCIAL_MEDIA_TWITTER_ICON = 'fa-twitter';

    public const ADDRESS_ICON = 'fa-map-marked-alt';
    public const MAIL_ICON = 'fa-envelope';
    public const PHONE_ICON = 'fa-mobile-alt';
}
