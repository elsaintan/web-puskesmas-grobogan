<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaduanSaran extends Model
{
    use HasFactory;
    protected $table = 'pegaduansaran';
    protected $guarded = ['id'];

    protected $fillable = [
        'nama_pegawai',
        'nama_ruangan',
        'pesan',
    ];
}
