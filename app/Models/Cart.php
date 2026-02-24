<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'image',
        'category',
        'description',
        'price',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
