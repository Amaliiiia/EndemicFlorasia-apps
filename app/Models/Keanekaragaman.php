<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Keanekaragaman extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'keanekaragamans';
    protected $fillable = ['tanaman_id', 'keanekaragaman', 'tahun'];
    public $timestamps = false;

    public function Tanaman()
    {

        return $this->belongsTo(Tanaman::class);
    }
}
