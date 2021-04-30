<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $returnType     = 'object';
    protected $allowedFields = ['nim', 'nama_lengkap', 'password', 'email', 'tanggal_lahir', 'jenis_kelamin', 'prodi', 'warga_negara', 'status', 'keterangan'];
}