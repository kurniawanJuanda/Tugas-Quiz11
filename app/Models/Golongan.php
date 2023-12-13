<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model {
    use HasFactory;

    protected $table = "golongan";
    protected $fillable = [
        'gol_kode',
        'gol_nama'
    ];

    public static function genGolKode()
    {
        $gol     = Golongan::latest()->first();
        $golKode = 'GL';

        if ($gol == null) {
            $noUrut = '001';
        } else {
            $explode = explode('-', $gol->gol_kode);
            $noUrut  = $explode[1] + 1;
            $noUrut  = str_pad($noUrut, 3, "0", STR_PAD_LEFT);
        }

        $result = $golKode . '-' . $noUrut;

        return $result;
    }
}
