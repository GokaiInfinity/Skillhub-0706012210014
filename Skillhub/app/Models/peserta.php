<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    /** @use HasFactory<\Database\Factories\PesertaFactory> */
    use HasFactory;

    protected $fillable = ['nama', 'email', 'tanggal_lahir'];

    public function ikutkursus(){
        return $this->belongsToMany(kelas::class, 'peserta_kelas','peserta_id','kelas_id');
    }
}
