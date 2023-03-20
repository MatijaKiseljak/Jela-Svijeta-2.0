<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Meal extends Model
{
    
    protected $fillable = ['name', 'description', 'ingredients', 'tags', 'categories'];
}
