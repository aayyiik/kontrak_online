<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    
    protected $table = 'kota';
    protected $primaryKey = 'id';
    // public $incrementing = false;
    
    protected $fillable = [
        'id',
        'kode_kota',
        'nama_kota'
    ];

    public function negara(){
        return $this->belongsTo(Negara::class, 'id');
    }

}
