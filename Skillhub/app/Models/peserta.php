<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    /** @use HasFactory<\Database\Factories\PesertaFactory> */
    use HasFactory;

    protected $fillable = ['nama', 'email', 'tanggal_lahir'];

    public function kursus()
    {
        return $this->belongsToMany(kelas::class);
    }

}
