<?php namespace Balkat\MasterplanHotspots\Models;

use Model;

/**
 * Model
 */
class Hotspot extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'balkat_masterplanhotspots_hotspot';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
