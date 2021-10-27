<?php namespace Balkat\Brochure\Models;

use Model;

/**
 * Model
 */
class Brochure extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'balkat_brochure_brochure';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
