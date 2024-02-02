<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 * @method static create(array $all)
 * @method static where(string $string, string $string1)
 * @method static avg(string $string)
 * @method static min(string $string)
 * @method static max(string $string)
 * @method static find($id)
 */
class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sobrenome',
        'idade',
        'sexo',
    ];
}
