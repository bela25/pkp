<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Anggota extends Model
{
    // use HasFactory;
    // protected $guarded =[];
    public $timestamps = false;
    public $primaryKey = 'idanggota';
    protected $fillable = [
        'nama', 'alamat', 'gambar_ktp','email','telp','gender','ktp'
    ];
}
