<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

/**
 * Class User
 * @package App
 * @property boolean $is_admin
 * @property string $name
 * @property string $email
 * @property string $password
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'id_in_soc',
        'type_auth',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function validationRules() {
        return [
            "name" => "required|min:4|max:50",
            "email" => "required|email|unique:users,email," . Auth::id(),
            "password" => "required",
            "new_password" => "nullable|string|min:3"
        ];
    }

    public function attributeNames() {
        return [
            'password' => 'Текущий пароль',
            'new_password' => 'Новый пароль'
        ];
    }
}
