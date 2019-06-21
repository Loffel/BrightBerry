<?php namespace Dooko\Products\Models;

use Model;
use Dooko\Products\Models\Category;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dooko_products_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'category' => [
            'Dooko\Products\Models\Category'
        ]
    ];

    public $belongsToMany = [
        'phototags' => [
            'System\Models\File',
            'table' => 'dooko_products_prods_tags',
            'key' => 'product_id',
            'otherKey' => 'file_id',
            'pivot'    => ['product_id ', 'file_id'],
        ]
    ];

    public $attachOne = [
        'photo_thumb' => 'System\Models\File'
    ];

    public $attachMany = [
        'photo_gallery' => 'System\Models\File',
        'photo_gallery_add' => 'System\Models\File'
    ];

    public function scopeSpecificCategory($query, $category_slug){
        $category = Category::where('slug', $category_slug)->first();
        if(isset($category))
            return $query->where('category_id', $category->id);
        else return $query;
    }
}
