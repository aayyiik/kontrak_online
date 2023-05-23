<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penunjukkan extends Model
{
    use HasFactory;
   
    protected $table = 'penunjukkan';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'no_kontrak',
        'tanggal_kontrak',
        'sik',
        'nib'
    ];
}
