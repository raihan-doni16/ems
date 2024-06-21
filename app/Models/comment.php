<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $primaryKey = 'id';
    protected $fillable = [
        'comment',
        'licence_id',
    ];
    public function licenceReport()
    {

        return $this->belongsTo(Licence_Report::class, 'licence_id');
    }
}
