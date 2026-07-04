<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'sub_category_id',
        'division_id',
        'title',
        'slug',
        'content',
        'meta_description',
        'image',
        'status',
        'is_breaking',
        'is_slider',
        'allow_comment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
