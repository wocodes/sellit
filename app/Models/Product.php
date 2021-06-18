<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $fillable = ['name', 'primary_description', 'secondary_description', 'slug', 'amount', 'image', 'testimonials', 'jumia_product_link',  'konga_product_link'];

    protected $casts = ['testimonials' => 'json'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageAttribute($value)
    {
        return Storage::url($value);
    }

    public function getLinkAttribute()
    {
        return "product/{$this->slug}-{$this->id}";
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
