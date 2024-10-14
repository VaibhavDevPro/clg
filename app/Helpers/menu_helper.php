<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class MenuHelper
{
    public static function getMenus()
    {
        // Define the menus
        return [
            [
                'title' => 'Food Category',
                'icon'  => 'category',
                'url'   => route('food-categories.index'),
                'routes' => ['food-categories.index'],
            ],
            // Add more menu items as needed
        ];
    }
}
