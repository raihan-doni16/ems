<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matriks_pemantauan_air extends Model
{
    use HasFactory;
    protected $table = 'matriks_pemantauan_air';
    protected $primaryKey = 'id';
    protected $fillable = [ 'title','description'];
}
