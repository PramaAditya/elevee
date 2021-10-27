<?php namespace Balkat\Video\Models;

use Model;

/**
 * Model
 */
class Video extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'balkat_video_video';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
