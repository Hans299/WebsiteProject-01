<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beritaModel extends Model
{
    use HasFactory;
    protected $table='berita';
    protected $fillable=[
        'id',
        'judul',
        'isi',
        'gambar',
        'status'
    ];
}
