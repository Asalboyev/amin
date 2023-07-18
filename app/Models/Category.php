<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name_uz', 'name_ru', 'name_en', 'images', 'icon', 'slug', 'color', 'spacial'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public static function boot()
    {
        parent::boot();
        static::saving(function ($post) {
            $post->slug =\Str::slug($post->name_uz);
        });
    }
}
