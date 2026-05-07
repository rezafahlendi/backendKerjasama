<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bentuk_kegiatan extends Model
{
    // Nama tabel di database SQL Server
    protected $table = 'tb_bentuk_kegiatan';

    // Primary Key tabel
    protected $primaryKey = 'id_bentuk_kegiatan';

    // Karena menggunakan UNIQUEIDENTIFIER (UUID), non-incrementing
    public $incrementing = false;

    // Tipe data Primary Key adalah string
    protected $keyType = 'string';

    // Matikan timestamps jika tabel Anda tidak memiliki kolom created_at/updated_at
    public $timestamps = false;

    // Daftar kolom yang dapat diisi (Mass Assignment)
    protected $fillable = [
        'bentuk_kegiatan',
        'keterangan',
        'expired_date'
    ];

    protected $casts = [
    'expired_date' => 'date',
    ];
}