<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul_perizinan extends Model
{
    use HasFactory;
    protected $table = 'modul_perizinan';
    protected $primaryKey = 'id';
    protected $fillable = ['img', 'title'];
}
