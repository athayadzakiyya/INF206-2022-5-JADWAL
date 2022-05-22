<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ganti extends Model
{
    use HasFactory;
    protected $table = 'ganti';

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
