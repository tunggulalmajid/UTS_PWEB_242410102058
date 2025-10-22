<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chocoffey</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div>
    @extends('layout.app')
    @section('title-section')
        DASHBOARD
    @endsection('title-section')
    @section('sub-title-section')
        Selamat Datang, {{$username}}
    @endsection('title-section')
    @section('content-section')
    <div class="px-5 md:px-20 mt-10">
        <div class="border-2 border-secondary rounded-xl p-3 lg:p-10">
            <h3 class="font-poppins font-bold">Daftar Menu</h3>
            <table class="w-full border-collapse border border-darkblue">
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
    </div>

    <div class=" px-5 md:px-20 mt-10 pb-10">
        <div class="border-2 border-secondary rounded-xl p-3 lg:p-10">
            <h3 class="font-poppins font-bold">Order</h3>
            <div class="overflow-x-scroll">
<table class="w-full border-collapse border border-darkblue">
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
            
        </div>
    </div>
    @endsection
</div>
</body>
</html>

