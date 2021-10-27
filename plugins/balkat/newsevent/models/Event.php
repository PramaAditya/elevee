<?php namespace Balkat\NewsEvent\Models;

use Model;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'balkat_newsevent_event';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $jsonable = ['pictures']; 
}
