<?php namespace Inerba\MiniGallery\Models;

use Model;

/**
 * Model
 */
class Gallery extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    
    /*
     * Validation
     */
    public $rules = [
        'name' => 'required',
    ];

    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = [
        'name',
        'description',
    ];

    /**
     * @var array Generate slugs for these attributes.
     */
    protected $slugs = ['slug' => 'name'];

    public function beforeSave()
    {
        $this->slug = \Str::slug( $this->name );
    }

    public $attachMany = [
        'images' => 'System\Models\File'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'inerba_minigallery_';
}