<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Third_party extends Model
{
    use HasFactory;
    protected $table = 'third_party';
    protected $primaryKey = 'id';
    protected $fillable = ['title','description'];
}
