<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Habitat extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'habitats';
    protected $fillable = ['nama_habitat', 'deskripsi_habitat'];
    public $timestamps = false;
}
