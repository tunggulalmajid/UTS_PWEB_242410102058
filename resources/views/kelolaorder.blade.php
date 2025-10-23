<div>
    @extends('layout.app')
    @section('title-section')
       KELOLA ORDER
    @endsection('title-section')
    @section('sub-title-section')
        Tempat Mengelola Order di dalam Chocoffey
    @endsection('title-section')

    @section('content-section')
    <div class=" px-5 md:px-20 mt-10 flex flex-col items-center xl:items-end xl:w-300 xl:ml-60">
        <div class="border-2 border-secondary rounded-xl p-5 md:p-10 overflow-x-scroll w-80 md:w-auto">
            <table class="w-full xl:w-300 border-collapse border border-darkblue">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th class="p-3 text-left border border-darkblue">ID</th>
                        <th class="p-3 text-left border border-darkblue">Nama</th>
                        <th class="p-3 text-left border border-darkblue">Menu</th>
                        <th class="p-3 text-left border border-darkblue">Jumlah</th>
                        <th class="p-3 text-left border border-darkblue">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($listOrder as $orders)
                        <tr class="font-poppins text-darkblue text-[18px]">
                            
                            <td class="p-3 border border-darkblue">{{ $orders['id'] }}</td>
                            <td class="p-3 border border-darkblue">{{ $orders['nama'] }}</td>
                            <td class="p-3 border border-darkblue">{{ $orders['menu'] }}</td>
                            <td class="p-3 border border-darkblue">{{ $orders['jumlah'] }}</td>
                            <td class="p-3 border border-darkblue">{{ $orders['harga'] }}</td>
                        </tr>
                    
                    @empty
                        <tr>
                            <td colspan="5" class="p-3 text-center text-gray-500">
                                Tidak ada data order.
                            </td>
                        </tr>

                    @endforelse
                </tbody>
            </table>
        </div>

        <div popover id="modal-tambah-order" class="m-auto w-80 md:w-150 md:h-150 rounded-xl backdrop-blur-lg p-5 bg-primary border-secondary border-2">
            <h3 class="font-poppins font-bold text-center">TAMBAH ORDER</h3>
            <div class="h-1 bg-secondary my-2"></div>
            <form action="/kelolaorder" method="POST">
                @csrf
                <div class="flex flex-col gap-2 mt-2">
                    <x-input name="nama" label="Nama" class="w-70 md:w-140">

                    </x-input>
                    <x-input name="menu" label="Menu" class="w-70 md:w-140">

                    </x-input>
                    <x-input name="jumlah" label="Jumlah" class="w-70 md:w-140">

                    </x-input>
                    <x-input name="harga" label="Harga" class="w-70 md:w-140">

                    </x-input>
                    <div class="h-1 bg-secondary my-2"></div>

                    <x-btn title="tambah">
                        
                    </x-btn>
                </div>
            </form>
        </div>

        <x-btn title="tambah" popovertarget="modal-tambah-order" class="w-60 h-10 mt-5">

        </x-btn>
    </div>
    @endsection
</div>
