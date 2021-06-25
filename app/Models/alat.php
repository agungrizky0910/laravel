<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alat extends Model
{
    // use HasFactory;
    protected $table = 'alat';
    protected $fillable = ['nama_alat', 'merek_type', 'range_resolusi', 'no_resi', 'pemegang', 'dept', 'no_registrasi', 'tgl_kalibrasi'];
};
