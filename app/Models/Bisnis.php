<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Bisnis extends Model
{
    public $timestamps = false;
    public $primaryKey = 'idbisnis';
    public $table = "bisniss";
    protected $fillable = [
        'judul', 'keterangan', 'gambar_produk'
    ];
}
