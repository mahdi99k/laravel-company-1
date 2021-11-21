<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function comments()
    {
        return $this->hasMany(Comment::class , 'news_id');  // هر پست دارد تعداد زیادی کامنت
    }
}
