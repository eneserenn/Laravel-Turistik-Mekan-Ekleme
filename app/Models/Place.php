<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
  }
  public function gallery(){
    return $this->hasMany(Image::class,'place_id','id');
}
public function reviews(){
    return $this->hasMany(Review::class);
}
    use HasFactory;
}
