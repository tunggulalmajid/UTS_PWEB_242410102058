<div>
    @extends('layout.app')
    @section('title-section')
        KELOLA MENU
    @endsection('title-section')
    @section('sub-title-section')
        Tempat Mengelola Menu di dalam Chocoffey
    @endsection('title-section')
     @section('content-section')
    <div class="px-5 md:px-20 mt-10 flex flex-col items-center xl:items-end w-auto xl:w-300 xl:ml-60">
        <div class="border-2 border-secondary rounded-xl p-5 lg:p-10 flex justify-center">
            <table class="w-full xl:w-300 border-collapse border border-darkblue">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th class="p-3 text-left border border-darkblue">ID</th>
                        <th class="p-3 text-left border border-darkblue">Menu</th>
                        <th class="p-3 text-left border border-darkblue">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($listMenu as $menu)
                        <tr class="font-poppins text-darkblue text-[18px]">
                            
                            <td class="p-3 border border-darkblue">{{ $menu['id'] }}</td>
                            <td class="p-3 border border-darkblue">{{ $menu['menu'] }}</td>
                            <td class="p-3 border border-darkblue">{{ $menu['harga'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="p-3 text-center text-gray-500">
                                Tidak ada data Menu.
                            </td>
                        </tr>

                    @endforelse
                </tbody>
            </table>
        </div>

        <div popover id="modal-tambah-menu" class="m-auto w-70 md:w-150 md:h-100 rounded-xl backdrop-blur-lg p-5 bg-primary border-secondary border-2">
            <h3 class="font-poppins font-bold text-center">TAMBAH MENU</h3>
            <div class="h-1 bg-secondary my-2"></div>
            <form action="/kelolamenu" method="POST">
                @csrf
                <div class="flex flex-col gap-2 mt-2">
                    <x-input name="menu" label="Menu" class="w-60 md:w-140">

                    </x-input>
                    <x-input name="harga" label="Harga" class="w-60 md:w-140">

                    </x-input>
                    <div class="h-1 bg-secondary my-2"></div>

                    <x-btn title="tambah">
                        
                    </x-btn>
                </div>
            </form>
        </div>

        <x-btn title="tambah" popovertarget="modal-tambah-menu" class="w-60 h-10 mt-5">

        </x-btn>
    </div>
    @endsection
</div>
