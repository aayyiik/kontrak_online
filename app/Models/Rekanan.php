<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekanan extends Model
{
    use HasFactory;
    
    protected $table = 'rekanan';
    protected $primaryKey = 'no_rekanan';

    protected $fillable = [
        'nama_rekanan', 'alamat', 'no_sap', 'nama_direktur',
        'email_perusahaan', 'status_rekanan'
    ];
}
