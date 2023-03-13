<?php

namespace App\Models\Akun;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class admin extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [''];

    public $primaryKey = "id_admins";

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $keyType = 'string';

    public $incrementing = false;

    protected $guard = "admin";
}
