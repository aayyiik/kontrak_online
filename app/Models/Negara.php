<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    use HasFactory;
    
    protected $table = 'negara';
    protected $primaryKey = 'id_negara';

    protected $fillable = [
        'nama_negara'
    ];

    public function kota(){
        return $this->hasMany(Kota::class, 'id_kota');
    }
}
