<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Article extends Model
{
    protected $fillable = [
    'category_id',
    'title',
    'slug',
    'summary',
    'content',
];   
public function category(){
 return $this->belongsTo(Category::class);
}    
}
