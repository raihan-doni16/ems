<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plb3_media extends Model
{
    use HasFactory;
    protected $table = 'plb3_media';
    protected $primaryKey = 'id';
    protected $fillable = [ 'title','img'];
}
