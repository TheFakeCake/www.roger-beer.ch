<?php

namespace App\Services;

use Detection\MobileDetect;

class MobileDetectService
{
    private MobileDetect $detector;

    public function __construct() {
        $this->detector = new MobileDetect();
    }

    public function isMobile(): bool
    {
        return $this->detector->isMobile();
    }
}
