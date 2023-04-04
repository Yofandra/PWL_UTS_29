<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Pegawai as Authenticatable;

class Pegawai extends Model
{
    protected $table="pegawai";
    public $timestamps= false;
    protected $primaryKey = 'nip';

    protected $fillable=[
        'nip',
        'nama',
        'alamat',
        'jabatan',
        'gaji_pokok'
    ];
}
