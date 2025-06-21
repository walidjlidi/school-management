<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'tutor_id',
    ];

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}
