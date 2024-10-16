<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'name',
        'type',
        'price',
        'description',
        'imageURL',
        'videoURL',
    ];

    public function hasImageUrl(): bool {
        return $this->imageUrl ? true : false;
    }

    public function hasVideoURL(): bool {
        return $this->videoUrl ? true : false;
    }
}
