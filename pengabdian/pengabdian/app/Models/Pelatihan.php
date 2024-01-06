<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ['namaprogram', 'diterbitkan', 'deskripsi'];
}
