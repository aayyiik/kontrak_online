<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekanan extends Model
{
    use HasFactory;
    
    protected $table = 'rekanan';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'no_rekanan','nama_rekanan', 'alamat', 'no_sap', 'nama_direktur',
        'email_perusahaan', 'status_rekanan'
    ];
}
