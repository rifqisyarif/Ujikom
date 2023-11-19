<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musyrif extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'nama', 'tanggal_lahir', 'tempat_tinggal', 'no_telp', 'email'
    ];

    protected $table = 'musyrifs';

    public $timestamps = false;
}
