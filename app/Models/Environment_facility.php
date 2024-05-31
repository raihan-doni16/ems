<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Environment_facility extends Model
{
    use HasFactory;
    protected $table = 'environment_facility';
    protected $primaryKey = 'id';
    protected $fillable = ['img', 'title'];
}
