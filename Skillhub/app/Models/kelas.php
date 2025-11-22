<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    /** @use HasFactory<\Database\Factories\KelasFactory> */
    use HasFactory;

    protected $fillable = ['nama_kelas', 'deskripsi_singkat', 'instruktur'];

    public function peserta()
    {
        return $this->belongsToMany(peserta::class);
    }
}
