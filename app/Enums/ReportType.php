<?php

namespace App\Enums;

enum ReportType : string
{
    case BUG = 'bug';
    case FEATURE_REQUEST = 'feature_request';
    case SECURITY = 'security';
    case OTHER = 'other';

    public function label(): string
    {
        return match ($this) {
            self::BUG => 'Bug Report',
            self::FEATURE_REQUEST => 'Feature Request',
            self::SECURITY => 'Security Issue',
            self::OTHER => 'Other',
        };
    }
}
