<?php

namespace WorkLifeBalance\Life;

use \ArrayObject;
use \WorkLifeBalance\Work;
use \WorkLifeBalance\Life\PersonalLife;

class Balance
{
    const URGENCY_CRITICAL = 'CRITICAL';

    const URGENCY_EMERGENCY = 'OMG THIS IS AN EMERGENCY!';

    const URGENCY_VITAL = 'VITAL';

    const URGENCY_URGENT = 'URGENT';

    private $children;

    private $partners;

    public static function isTheClientMoreImportantThan(
        Work $work,
        PersonalLife $personal
    ) {
        return false;
    }

    public function __construct(array $partners = array(), array $children = array())
    {
        $this->children = new ArrayObject($children);
        // allow poly
        $this->partners = new ArrayObject($partners);
    }

    public function areMyChildrenMoreImportantThan(
        Work $work,
        $urgency = self::URGENCY_CRITICAL
    ) {
        return true;
    }

    public function isMyRelationshipMoreImportantThan(
        Work $work,
        $urgency = self::URGENCY_CRITICAL
    ) {
        return true;
    }



    public function isMyHealthMoreImportantThan(
        Work $work,
        $urgency = self::URGENCY_CRITICAL
    ) {
        return true;
    }

    public function isClientMoreImportantThan(PersonalLife $personalLife)
    {
        return false;
    }
}
