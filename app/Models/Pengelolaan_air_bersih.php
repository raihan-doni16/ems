<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengelolaan_air_bersih extends Model
{
    use HasFactory;
    protected $table = 'pengelolaan_air_bersih';
    protected $primaryKey = 'id';
    protected $fillable = ['img', 'title','description','timestamps'];
}
