<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'designer_id',
        'title',
        'slug',
        'banner',
        'description',
        'images',
        'videos',
        'views',
        'likes',
        'saves',
        'status',
        'is_featured',
        'is_published',
    ];

    public function designer()
    {
        return $this->belongsTo(Designer::class, 'designer_id');
    }
}
