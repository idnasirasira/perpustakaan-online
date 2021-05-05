<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapeminjam extends Model
{
    protected $table = 'datapeminjam';
    protected $fillable = ['code', 'id_peminjam', 'jumlah_pinjam', 'tanggal_kembali'];
}
