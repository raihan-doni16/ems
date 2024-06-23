<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{

    use HasFactory;
    protected $table = 'repository';
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'name',
        'year',
        'file',
        'category',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function repository()
    {
        return $this->belongsToMany(User::class);

    }
}
