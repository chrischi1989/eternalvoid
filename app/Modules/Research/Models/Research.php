<?php

namespace EternalVoid\Modules\Research\Models;

use Carbon\Carbon;
use EternalVoid\Traits\Uuids;
use EternalVoid\Traits\Who;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Research
 *
 * @property int $id
 * @property string $uuid
 * @property Carbon $created_at
 * @property string $created_uuid
 * @property Carbon $updated_at
 * @property string $updated_uuid
 * @property int $pkt
 * @property int $pulsantrieb
 * @property int $antimaterieantrieb
 * @property int $projektilwaffen
 * @property int $laserwaffen
 * @property int $plasmawaffen
 * @property int $phasenwaffen
 * @property int $strukturelle_integritaet
 * @property int $mikroarchitektur
 * @property int $orbitalkonstruktion
 * @property int $lagererweiterung
 * @property int $schiffskapazitaet
 * @property int $rumpfstatik
 * @property int $werftarchitektur
 * @property int $schildtechnologie
 * @property int $kommunikation
 * @property int $imperiale_verwaltung
 * @property int $spionage
 * @property int $recyling
 * @property int $geologie
 * @property int $speziallegierungen
 * @property int $materiestabilisierung
 *
 * @package EternalVoid\Modules\Research\Models
 */
class Research extends Model
{
    use Uuids;
    use Who;
    /**
     * @var bool
     */
    public $incrementing = false;
    /**
     * @var string
     */
    protected $table = 'users_research';
    /**
     * @var string
     */
    protected $primaryKey = 'uuid';
}