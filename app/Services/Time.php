<?php

namespace App\Services;

use Carbon\Carbon;

class Time
{
    public function now($format = 'Y-m-d H:i:s')
    {
        return Carbon::now()->format($format);
    }

    public function meridiemChecker()
    {
        if (Carbon::now()->format('A') == 'AM') {
            return 'Good Day';
        }

        return 'GoodNight';
    }

    public static function getGreeting()
    {
        $hour = date('H');
        if ($hour <= 24 && $hour < 12) {
            return 'Good Morning';
        } elseif ($hour >= 12 && $hour < 18) {
            return 'Good Afternoon';
        } elseif ($hour >= 18 && $hour < 24) {
            return 'Good Night';
        } else {
            return 'Good Day';
        }
    }

    public function shortTimeMessage($date)
    {
        $set = Carbon::create($date);
        $now = Carbon::now();
        $days_from_now = $now->copy()->subWeek();

        if ($set->gte($days_from_now)) {
            $format = Carbon::parse($date)->diffForHumans();
        } else {
            $format = Carbon::parse($date)->format('M-d-y');
        }

        return $format;
    }
}
