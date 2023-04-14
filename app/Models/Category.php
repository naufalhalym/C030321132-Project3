<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute; 
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'image'
    ];
        /**
        * posts
        *
        * @return void
        */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
        /**
        * image
        *
        * @return Attribute
        */
    protected function image(): Attribute
    {
        return Attribute::make(
        get: fn ($value) => asset('/storage/categories/' . $value),
        );
    }
}
