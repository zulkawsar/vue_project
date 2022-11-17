<?php

namespace App\Api\Services;

use App\Api\Interface\CategoryInterface;
use App\Models\Category;

class CategoryService implements CategoryInterface
{
    public function getCategory()
    {
        return Category::get();
    }
}