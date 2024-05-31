<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plb3 extends Model
{
    use HasFactory;
    protected $table = 'plb3';
    protected $primaryKey = 'id';
    protected $fillable = ['img', 'title','subtitle','description'];
}
