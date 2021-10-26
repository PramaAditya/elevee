<?php namespace Balkat\Unit\Models;

use Model;
use Balkat\Unit\Models\UnitCategory;

/**
 * Model
 */
class Unit extends Model
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
    public $table = 'balkat_unit_unit';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $jsonable = ['hero_slider_image', 'unit_slider_image', 'floorplan_image', 'specification']; 

    public function getUnitCategoryIdOptions($value, $formData)
    {
        $unitcategories = UnitCategory::all();
        $result = array();
        foreach ($unitcategories as $unitcategory) {
            $result[$unitcategory->id] = $unitcategory->name;
        }
        return $result;
    }

    public $belongsTo = [
        'unitcategory' => [\Balkat\Unit\Models\UnitCategory::class, 'key' => 'unit_category_id']
    ];
}
