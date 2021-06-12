<?php

namespace App\Repositories\Master;

use DB;

class Barang
{
    public function getMasterBarang($page)
    {
        return DB::connection('sqlsrv')
            ->table('barang_farmasi')
            ->select('kd_barang','nama_barang','kd_satuan_besar','kd_satuan_kecil','harga_satuan_besar',
                    'harga_satuan_netto','dosis')
            ->paginate($page);
    }
}