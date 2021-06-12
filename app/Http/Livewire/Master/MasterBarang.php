<?php

namespace App\Http\Livewire\Master;

use App\Repositories\Master\Barang;
use Livewire\Component;
use Livewire\WithPagination;

class MasterBarang extends Component
{
    use WithPagination;

    protected  $dataBarang;

    public $limit = 10;

    public function render(Barang $barang)
    {
        $dataBarang = $barang->getMasterBarang($this->limit);
        return view('livewire.master.master-barang', compact('dataBarang'));
    }

}
