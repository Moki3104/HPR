<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'title',
    'body',
    'image_url',
    'created_at',
    'updated_at',
    'deleted_at',
    'category_id',
    'user_id',
    ];
    
    function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()   
    {
        return $this->hasMany(Comment::class);  
    }
    
    public function likes()   
    {
        return $this->hasMany(Like::class);  
    }

}
