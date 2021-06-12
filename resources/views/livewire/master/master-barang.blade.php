<div>
        {{-- <table class="table-fixed w-full border-collapse border border-blue-500">
            <thead> 
                <tr class="bg-gray-100">
                    <th class="border border-blue-600 px-4 py-2 w-20">Kode Barang</th>
                    <th class="border border-blue-600 px-4 py-2">Nama Barang</th>
                    <th class="border border-blue-600 px-4 py-2">Satuan Besar</th>
                    <th class="border border-blue-600 px-4 py-2">Satuan Kecil</th>
                    <th class="border border-blue-600 px-4 py-2">Harga Besar</th>
                    <th class="border border-blue-600 px-4 py-2">Harga Netto</th>
                    <th class="border border-blue-600 px-4 py-2">Dosis</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataBarang as $barang)
                <tr>
                    <td class="border border-blue-600">
                        {{ $barang->kd_barang }}
                    </td>
                    <td class="border border-blue-600">
                        {{ $barang->nama_barang }}
                    </td>
                    <td class="border border-blue-600">
                        {{ $barang->kd_satuan_besar }}
                    </td>
                    <td class="border border-blue-600">
                        {{ $barang->kd_satuan_kecil }}
                    </td>
                    <td class="border border-blue-600">
                        {{ $barang->harga_satuan_besar }}
                    </td>
                    <td class="border border-blue-600">
                        {{ $barang->harga_satuan_netto }}
                    </td>
                    <td class="border border-blue-600">
                        {{ $barang->dosis }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $dataBarang->links() }} --}}
    <div class="w-full bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-2">
        <table class="border-collapse w-full">
            <thead>
                <tr>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Kode Barang</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Nama Barang</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Satuan Besar</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Satuan Kecil</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Harga Besar</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Harga Netto</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Dosis</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataBarang as $barang)
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
                        {{ $barang->kd_barang }}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                        {{ $barang->nama_barang }}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                        {{ $barang->kd_satuan_besar }}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                        {{ $barang->kd_satuan_kecil }}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                        {{ $barang->harga_satuan_besar }}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                        {{ $barang->harga_satuan_netto }}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                        {{ $barang->dosis }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $dataBarang->links() }}
    </div>
</div>
