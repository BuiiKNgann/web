<?php

use App\Models\Category;

function getCategories()
{
    return Category::orderBy('name', 'AsC')
        ->with('sub_category')
        ->orderBy('id', 'DESC')
        ->where('status', 1)
        ->where('showHome', 'Yes')
        ->get();
}
