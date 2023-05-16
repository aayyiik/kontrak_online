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

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table = 'users';
     protected $primaryKey = 'nik';
    
    protected $fillable = [
        'nama',
        'id_role',
        'id_unit',
        'status',
        'password',
        'remember_token'
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

    public function role(){
        return $this->belongsTo(Role::class, 'id_role');
    }

<<<<<<< HEAD
    public function unit_kerja(){
        return $this->belongsTo(UnitKerja::class, 'id_unit');
    }
=======
    public function unit(){
        return $this->belongsTo(UnitKerja::class, 'id_unit');
    }

   
>>>>>>> a537976108c998cbf417f0254c7ca4fca4473186
}
