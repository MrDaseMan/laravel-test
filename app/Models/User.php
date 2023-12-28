<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        'email_verified_at',
        'created_at',
        'updated_at',
        'is_admin'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
