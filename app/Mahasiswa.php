<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','jenis_kelamin', 'agama', 'jurusan', 'fakultas', 'alamat'];
}
