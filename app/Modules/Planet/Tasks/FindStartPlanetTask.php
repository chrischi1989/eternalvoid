<?php

namespace EternalVoid\Modules\Planet\Tasks;

use EternalVoid\Modules\Planet\Models\Planet;

/**
 * Class FindStartPlanetTask
 *
 * @package EternalVoid\Modules\Planet\Tasks
 */
class FindStartPlanetTask
{
    /**
     * @var Planet
     */
    private $planet;

    /**
     * FindStartPlanetTask constructor.
     *
     * @param Planet $planet
     */
    public function __construct(Planet $planet)
    {
        $this->planet = $planet;
    }

    /**
     * @return Planet
     */
    public function run(): Planet
    {
        $planet = $this->planet->where([
            'settled_at' => null,
            'bonus'      => 0,
        ])->orderByRaw('RAND()')->take(1)->first();

        if (is_null($planet)) {
            return $this->run();
        }

        return $planet;
    }
}