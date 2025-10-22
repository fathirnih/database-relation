<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    use HasFactory;
    protected $fillable = ['nama_ekskul', 'deskripsi'];

    public function siswas()
    {
        return $this->belongsToMany(Siswa::class);
    }
}

