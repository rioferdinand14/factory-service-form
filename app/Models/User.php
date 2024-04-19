<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $connection = 'cksql';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'password',
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
        'password' => 'hashed',
    ];

    public function detail_user()
    {
        return $this->hasOne(DetailUser::class, 'user_id');
    }

    // public function role()
    // {
    //     return $this->belongsTo(TypeUser::class, 'type_id');
    // }
                                   
    /**
     * Check if the user is an administrator.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->detail_user->type_user->name === 'Administrator'; // Assuming 'name' is the column containing role names in the 'type_user' table
    }
}
