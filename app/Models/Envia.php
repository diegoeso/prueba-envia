<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envia extends Model
{
    use HasFactory;

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
        'cont',
        'guia'
    ];
}
