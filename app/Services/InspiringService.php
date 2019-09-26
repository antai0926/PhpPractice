<?php

namespace App\Services;

/**
 * Class InspiringService
 */
class InspiringService
{
    /**
     * @return string
     */
    public function inspire()
    {
         return (new InspiringService())->inspire();
    }
}