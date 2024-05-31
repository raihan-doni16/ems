<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang_media extends Model
{
    use HasFactory;
    protected $table = 'ruang_media';
    protected $primaryKey = 'id';
    protected $fillable = ['title','description'];
}
