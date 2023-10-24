<?php

namespace App\Http\Repositories;

use App\Http\Resources\HomepageResource;
use App\Models\Homepage;
use App\Models\Socials;
use App\Traits\HttpResponses;
use Carbon\Carbon;
use DateTimeZone;

class HomepageRepository
{
    use HttpResponses;

    public static function getHomepageContent()
    {
        return new HomepageResource(Homepage::first());
    }

    public static function getSocial()
    {
        return Socials::all();
    }

    public static function getLocalTime()
    {
        $now = Carbon::now();

        $timezone = new DateTimeZone(config('app.timezone'));
        $offset = $timezone->getOffset($now);

        $gmtSign = ($offset >= 0) ? '+' : '-';

        $gmtOffset = sprintf('%s%02d:%02d', $gmtSign, abs($offset) / 3600, abs($offset) % 3600 / 60);

        $formattedDateTime = $now->format('h:i A') . ' - GMT' . $gmtOffset;

        return $formattedDateTime;
    }
}
