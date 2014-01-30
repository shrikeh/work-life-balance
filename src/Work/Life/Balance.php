<?php

namespace Work\Life;

use \Work\Client;
use \Work\Life\PersonalLife;

class Balance
{
    const URGENCY_CRITICAL = 'CRITICAL';

    const URGENCY_EMERGENCY = 'OMG THIS IS AN EMERGENCY!';

    const URGENCY_VITAL = 'VITAL';

    const URGENCY_URGENT = 'URGENT';

    public function areMyChildrenMoreImportantThan(
        Client $client,
        $urgency = self::URGENCY_CRITICAL
    ) {
        return true;
    }

    public function isMyHealthMoreImportantThan(
        Client $client,
        $urgency = self::URGENCY_CRITICAL
    ) {
        return true;
    }

    public function isClientMoreImportantThan(PersonalLife $personalLife)
    {
        return false;
    }
}
