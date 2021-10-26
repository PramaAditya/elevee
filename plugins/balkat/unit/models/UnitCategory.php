<?php namespace Balkat\Unit\Models;

use Model;

/**
 * Model
 */
class UnitCategory extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'balkat_unit_unitcategory';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'units' => [\Balkat\Unit\Models\Unit::class, 'key' => 'unit_category_id']
    ];
}
