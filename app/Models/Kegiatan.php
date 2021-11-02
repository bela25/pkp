<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Kegiatan extends Model
{
    public $timestamps = false;
    public $primaryKey = 'idkegiatan';
    public $table = "kegiatans";
    protected $fillable = [
        'judulkegiatan', 'gambar_kegiatan'
    ];
}
