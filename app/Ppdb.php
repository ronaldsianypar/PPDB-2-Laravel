<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    protected $table = "ppdb";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'nama',
        'jns_kelamin',
        'temp_lahir',
        'tgl_lahir',
        'alamat',
        'asal_sekolah',
        'kelas',
        'jurusan',
    ];
}
