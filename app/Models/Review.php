<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Review extends Model
{
    protected $fillable=[
        'place_id',
        'user_id',
        'subject',
        'review',
        'IP',
        'like'
    ];
    public function place(){
       return $this->belongsTo(Place::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
     }
    use HasFactory;
}
