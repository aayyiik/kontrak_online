<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';
    protected $primaryKey = 'id';
    // public $incrementing = false;

    protected $fillable = [
        'id',
        'kode_role',
        'nama_role'
    ];

    public function user(){
<<<<<<< HEAD
        return $this->hasaMany(User::class, 'nik');
=======
        return $this->hasMany(User::class, 'nik');
>>>>>>> a537976108c998cbf417f0254c7ca4fca4473186
    }
}
