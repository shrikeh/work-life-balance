<?php

namespace Work\Life;

use \Work\Client;
use \Work\Life\PersonalLife;

class Balance
{
    public function areMyChildrenMoreImportantThan(Client $client, $urgency = 'CRITICAL')
    {
        return true;
    }

    public function isMyHealthMoreImportantThan(Client $client, $urgency = 'CRITICAL')
    {
        return true;
    }

    public function isClientMoreImportantThan(PersonalLife $personalLife)
    {
        return false;
    }
}
