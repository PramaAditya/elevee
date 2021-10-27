<?php namespace Balkat\NewsEvent\Models;

use Model;

/**
 * Model
 */
class News extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'balkat_newsevent_news';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $jsonable = ['pictures']; 
}
