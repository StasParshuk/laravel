<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function images(){
        return$this->morphMany(Image::class,'images');
    }

    public function available():Attribute
    {
return new Attribute(
    get:fn()=> $this->attributes['in_stock']>0);
    }
}
