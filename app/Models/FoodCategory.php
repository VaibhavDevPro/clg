<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    use HasFactory;

    // Define fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'created_on',
        'created_by',
        // add other fields here as needed
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->created_by) {
                $model->created_by = 'Admin'; // Default to Admin if not provided
            }
            if (!$model->created_on) {
                $model->created_on = now(); // Set current timestamp if not provided
            }
        });
    }
}
