<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;
    protected $table = 'tanamans';
    protected $fillable = [
        'nama_tanaman',
        'kingdom',
        'subkingdom',
        'divisi',
        'subdivisi',
        'kelas',
        'subkelas',
        'ordo',
        'famili',
        'genus',
        'spesies',
        'daerah_endemis',
        'habitat_id',
        'ancaman_id',
        'karateristik',
        'deskripsi',
        'gambar',
    ];
    public $timestamps = false;

    public function habitat()
    {

        return $this->belongsTo(Habitat::class);
    }
    
    public function ancaman()
    {

        return $this->belongsTo(Ancaman::class);
    }
}
