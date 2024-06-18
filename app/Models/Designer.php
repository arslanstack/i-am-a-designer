<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Designer extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'designers';
    protected $guard = 'designer';

    protected $fillable = [
        'name',
        'email',
        'username',
        'phone',
        'image',
        'cover_image',
        'resume',
        'about',
        'city',
        'country',
        'pinterest',
        'dribbble',
        'instagram',
        'facebook',
        'view_count',
        'email_verified_at',
        'password',
        'open',
        'status',
        'premium',
        'remember_token',
        'verification_token',
        'definition'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isActive(): bool
    {
        return $this->status === 1;
    }
    public function isOpen(): bool
    {
        return $this->open === 1;
    }
    public function isPremium(): bool
    {
        return $this->status === 1;
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'designer_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'designer_categories', 'designer_id', 'category_id');
    }
}
