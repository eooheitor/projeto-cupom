<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria';
    protected $fillable = [
        'nome',
        'destaque',
        'cor'
    ];

    public function cupom()
    {
        return $this->hasMany(Cupom::class);
    }
}
