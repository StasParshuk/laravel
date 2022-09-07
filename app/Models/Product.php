<?php

namespace App\Models;

use App\Services\FileStorageService;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use willvincent\Rateable\Rateable;

class Product extends Model
{
    use HasFactory,Rateable;

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

    public function setThumbnailAttribute($image){
        if (!empty($this->attributes["thumbnail"])){
            FileStorageService::remove($this->attributes["thumbnail"]);
        }
        $this->attributes["thumbnail"] = FileStorageService::upload($image);
    }

    public function thumbnailUrl(): Attribute
    {
        return new Attribute(get: fn() => Storage::url($this->attributes['thumbnail']));
    }

    public function getUserRating()
    {
        $rating = $this->ratings()->with("rateable_id",$this->id)->get();
        return $rating->where("user_id",auth()->id())->first();
    }
}

