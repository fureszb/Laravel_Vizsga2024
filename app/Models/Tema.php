<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
    protected $table = "tema";
    protected $primaryKey = "id";
    protected $fillable = [
        'temanev'
    ];

    public function szavak()
    {

        return $this->belongsTo(Szavak::class, 'id', 'temaId');
    }
}
