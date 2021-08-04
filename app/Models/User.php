<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected  $table = 'users';
    protected $fillable = [
        'first_name',
        'last_name',
        'avatar',
        'age',
        'family_situation',
        'total_score',
        'nbr_child',
        'nbr_of_enrolled_course',
        'education_years',
        'cin',
        'scolarity_level',
        'phone',
        'parent_phone',
        'email',
        'password',
        'groups',
        'status',
        'current_status',
        'is_online',
        'date_of_final_registrations',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
