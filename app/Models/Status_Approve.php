<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_Approve extends Model
{
    use HasFactory;

    protected $table = 'status';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'kode_status',
        'nama_status'
    ];
}
