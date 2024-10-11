<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    use HasFactory;

    // Specify the table associated with the model if it's not the plural form of the model name
    protected $table = 'food_categories';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'name',
    ];

    // Optionally, define relationships, accessors, mutators, etc.
}
