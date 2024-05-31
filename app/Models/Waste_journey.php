<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waste_journey extends Model
{
    use HasFactory;
    protected $table = 'waste_journey';
    protected $primaryKey = 'id';
    protected $fillable = ['img', 'title'];
}
