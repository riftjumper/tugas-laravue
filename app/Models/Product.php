<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','price','stock','status'
    ];

    public function transactions(){
        return $this->hasMany('App\Models\Transaction','product_id');
    }
}
