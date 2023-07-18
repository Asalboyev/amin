<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $casts = [
        'images' => 'array'
    ];
    protected $fillable = [
        'category_id', 'name_uz', 'name_ru', 'name_en', 'images', 'thetoysize',
        'assembled_uz', 'assembled_ru', 'assembled_en', 'packedsize', 'productioncertificate',
        'Typeofgrouppackaging_uz', 'Typeofgrouppackaging_ru', 'Typeofgrouppackaging_en',
        'amountinapackage_uz', 'amountinapackage_en', 'amountinapackage_ru', 'namesoftoys_uz',
        'namesoftoys_ru', 'namesoftoys_en', 'vendorcode', 'title_uz', 'title_ru', 'title_en', 'numberofstars', 'slug'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public static function boot()
    {
        parent::boot();
        static::saving(function ($post) {
            $post->slug =\Str::slug($post->name_uz);
        });
    }
}
