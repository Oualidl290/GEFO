<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'reseau_social',
        'nom','prenom',
        'email',
        'ville',
        'adress',
        'tel',
        'ICE',
        'created_by',
        'updated_by'
    ];
    public $timestamps = false;
    use HasFactory;
}
