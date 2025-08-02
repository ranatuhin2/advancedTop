<?php

namespace App\Models;

use App\Enums\Enums\ReportStatus;
use App\Enums\ReportType;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected function casts(): array
    {
        return [
            'report_type' => ReportType::class,
            'status' => ReportStatus::class,
        ];
    }

    protected $guarded = [];

}
