<?php namespace Balkat\Unit\Models;

use Model;
use Balkat\Unit\Models\Unit;

/**
 * Model
 */
class Building extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'balkat_unit_building';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $jsonable = ['units']; 

    public function getUnitsOptions($value, $formData)
    {
        $units = Unit::all();
        $result = array();
        foreach ($units as $unit) {
            $result[$unit->id] = $unit->name;
        }
        return $result;
    }

}
