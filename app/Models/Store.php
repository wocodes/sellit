<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Store extends Model
{
    protected $fillable = [
        'name', 'about', 'email', 'phone', 'facebook', 'twitter', 'website','instagram', 'terms', 'logo'
    ];


    public function getLogoAttribute($value)
    {
        return Storage::url($value);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
