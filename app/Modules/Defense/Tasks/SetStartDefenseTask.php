<?php

namespace EternalVoid\Modules\Defense\Tasks;

use EternalVoid\Modules\Defense\Models\Defense;
use EternalVoid\Modules\Planet\Models\Planet;

/**
 * Class SetStartDefenseTask
 *
 * @package EternalVoid\Modules\Defense\Tasks
 */
class SetStartDefenseTask
{
    /**
     * @var Defense
     */
    private $defense;

    /**
     * SetStartDefenseTask constructor.
     *
     * @param Defense $defense
     */
    public function __construct(Defense $defense)
    {
        $this->defense = $defense;
    }

    /**
     * @param Planet $planet
     *
     * @return bool
     */
    public function run(Planet $planet): bool
    {
        $this->defense->planet_uuid  = $planet->uuid;
        $this->defense->created_uuid = $planet->settled_uuid;
        $this->defense->updated_uuid = $planet->settled_uuid;

        return $this->defense->save();
    }
}