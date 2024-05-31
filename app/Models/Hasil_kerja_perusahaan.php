<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil_kerja_perusahaan extends Model
{
    use HasFactory;
    protected $table = 'hasil_kerja_perusahaan';
    protected $primaryKey = 'id';
    protected $fillable = ['img', 'title','subtitle', 'description'];
}
