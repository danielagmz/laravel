<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'username',
        'email',
        'bio',
        'avatar',
        'banner',
        'is_admin',
        'socialProvider',
        'id'
        
    ];

    protected $hidden = [
        'password'
    ];
    
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'author_id', 'id');
    }

    public function tokens(): HasMany
    {
        return $this->hasMany(Token::class, 'user_id', 'id');
    }

    public function getAuthIdentifierName()
    {
        return 'username';
    }
}
