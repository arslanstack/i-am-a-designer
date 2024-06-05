<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSave extends Model
{
    use HasFactory;

    protected $table = 'project_saves';

    protected $fillable = ['user_id', 'project_id', 'designer_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function designer()
    {
        return $this->belongsTo(Designer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSaved($query, $user_id, $project_id)
    {
        return $query->where('user_id', $user_id)->where('project_id', $project_id);
    }
}
