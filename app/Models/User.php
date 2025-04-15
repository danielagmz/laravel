<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    protected $fillable = [
        'username',
        'email',
        'bio',
        'avatar',
        'banner'
    ];

    protected $hidden = [
        'password',
        'id',
        'is_admin',
        'socialProvider'
    ];
    
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'author_id', 'id');
    }

    public function tokens(): HasMany
    {
        return $this->hasMany(Token::class, 'user_id', 'id');
    }
}
