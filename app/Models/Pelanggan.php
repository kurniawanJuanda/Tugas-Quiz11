<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model {
    use HasFactory;
    protected $table = "pelanggan";

    protected $fillable = [
        'pel_id_gol',
        'pel_kode',
        'pel_no',
        'pel_nama',
        'pel_alamat',
        'pel_hp',
        'pel_ktp',
        'pel_seri',
        'pel_meteran',
        'pel_aktif',
        'pel_id_user',
    ];

    public function golongan()
    {
        return $this->belongsTo(Golongan::class, 'pel_id_gol', 'id');
    }

    public static function genPelKode()
    {
        $pel     = Pelanggan::latest()->first();
        $pelKode = 'PL';

        if ($pel == null) {
            $noUrut = '001';
        } else {
            $explode = explode('-', $pel->pel_no);
            $noUrut  = $explode[1] + 1;
            $noUrut  = str_pad($noUrut, 3, "0", STR_PAD_LEFT);
        }

        $result = $pelKode . '-' . $noUrut;

        return $result;
    }

    public static function genNoSeri()
    {
        $kode = '';

        for ($i = 0; $i < 12; $i++) {
            $kode .= mt_rand(0, 9);
        }

        return $kode;
    }

    public static function genNoMeteran()
    {
        $kode = '';

        for ($i = 0; $i < 8; $i++) {
            $kode .= mt_rand(0, 9);
        }

        return $kode;
    }

}
