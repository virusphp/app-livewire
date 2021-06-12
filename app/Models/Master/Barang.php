<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';

    protected $table = "barang_farmasi";

    protected $primaryKey = "idx_barang";
}
