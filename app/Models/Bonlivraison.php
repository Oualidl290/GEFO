<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonlivraison extends Model
{
    use HasFactory;

    protected $table = 'bonlivraisons';

    protected $fillable = [
        'date',
        'regle',
        'client_id',
        'created_by',
        'updated_by',
    ];

    // Define relationships if any
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public $timestamps = false ;
}
