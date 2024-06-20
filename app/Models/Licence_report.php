<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licence_report extends Model
{
    use HasFactory;
    protected $table = 'licence_report';
    protected $primaryKey = 'id';
    protected $fillable = ['area', 'tipe_bisnis','kategori','klasifikasi','tipe_izin','nib','nomor_izin','tanggal_terbit_izin','tanggal_habis_izin','status','status_perizinan','status_db','status_lanjut','keterangan','file','progress','approve'];

}
