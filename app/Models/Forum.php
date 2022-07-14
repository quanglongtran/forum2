<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\SubCategory;
use App\Models\Category;

class Forum extends Model
{
    use HasFactory;

    public function category($status = '10'){
        return $this->hasMany(Category::class)->where('status', '<>', $status);
    }

    public function subCategory()
    {
        return $this->hasManyThrough(SubCategory::class, Category::class);
    }
}
