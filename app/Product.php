<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'category_id', 'sub_category_id', 'description', 'image_path'
    ];

    public static function boot()
    {
        parent::boot();
    }
    public static function rules($id = '') 
    {
      return [
          'name' => [
            'required', 
          ],
      ];
    }
    public static function messages($id = '') 
    {
      return [
          'name.required' => 'You must enter product name.',
      ];
    }
}
