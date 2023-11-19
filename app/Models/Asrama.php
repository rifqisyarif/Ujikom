<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asrama extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'asrama', 'musyrif'
    ];

    protected $table = 'Asramas';
    protected $guarded = [];

    public function santris()
    {
        return $this->hasMany(Asrama::class, 'asrama', 'nama');
    }

    public function totalSantri()
    {
        return $this->santris()->count();
    }
}
