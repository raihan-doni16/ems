<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengelolaan_air_limbah extends Model
{
    use HasFactory;
    protected $table = 'pengelolaan_air_limbah';
    protected $primaryKey = 'id';
    protected $fillable = ['img', 'title','description'];
}
