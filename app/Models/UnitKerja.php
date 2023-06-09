<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    use HasFactory;

    protected $table = 'unit_kerja';
    protected $primaryKey = 'id';
    // public $incrementing = false;

    protected $fillable = [
        'id','kode_unit','nama_unit'
    ];

    public function user(){
        return $this->hasMany(User::class, 'nik');
    }
}
