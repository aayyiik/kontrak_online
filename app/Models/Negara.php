<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    use HasFactory;
    
    protected $table = 'negara';
    protected $primaryKey = 'id';
    // public $incrementing = false;
    
    protected $fillable = [
        'nama_negara'
    ];

    public function kota(){
        return $this->hasMany(Kota::class, 'id_kota');
    }
}
