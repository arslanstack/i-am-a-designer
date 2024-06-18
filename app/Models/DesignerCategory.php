<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignerCategory extends Model
{
    use HasFactory;

    protected $table = 'designer_categories';

    protected $fillable = [
        'designer_id',
        'category_id',
    ];

    public function designer()
    {
        return $this->belongsTo(Designer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
