<?php

namespace EternalVoid\Modules\Resources\Models;

use Carbon\Carbon;
use EternalVoid\Traits\Uuids;
use EternalVoid\Traits\Who;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Resource
 *
 * @property int $id
 * @property string $uuid
 * @property string $planet_uuid
 * @property Carbon $created_at
 * @property string $created_uuid
 * @property Carbon $updated_at
 * @property string $updated_uuid
 * @property double $aluminium
 * @property double $titan
 * @property double $silizium
 * @property double $arsen
 * @property double $wasserstoff
 * @property double $antimaterie
 * @property int $lager_cap
 * @property int $speziallager_cap
 * @property int $tanks_cap
 * @property int $bunker_cap
 * @property double $lager_int
 * @property double $speziallager_int
 * @property double $tanks_int
 * @property double $bunker_int
 *
 * @package EternalVoid\Modules\Resource\Models
 */
class Resource extends Model
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
    protected $table = 'planets_resources';
    /**
     * @var string
     */
    protected $primaryKey = 'uuid';
}
