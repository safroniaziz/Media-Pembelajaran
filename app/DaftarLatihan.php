<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarLatihan extends Model
{
    protected $fillable = [
        'nama','kelas','jumlah_benar','nilai','status'
    ];
}
