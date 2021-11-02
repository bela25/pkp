<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Berita extends Model
{
    public $timestamps = false;
    public $primaryKey = 'idberita';
    public $table = "beritas";
    protected $fillable = [
        'judul_berita','isi_berita' , 'gambar_berita'
    ];
}
