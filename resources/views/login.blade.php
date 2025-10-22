<div>
    @extends('layout.outer')
    @section('body-out')
    <div class="flex flex-col gap-20 items-center text-center my-30">
        <div>
        <h3>
            CHOCOFFEY
        </h3>
        <h1>LOGIN</h1>
        </div>
        

        <div class="">
             {{-- error handle --}}
            @if (session('error'))
                <div class="bg-primary border-3 border-red-700 text-red-700 p-3 rounded-xl mb-6 text-sm text-center">
                    {{ session('error') }}
                </div>
            @endif
                
            {{-- sucess handle --}}
            @if (session('success'))
                <div class="bg-green-900/50 border border-green-700/50 text-green-300 p-3 rounded-lg mb-6 text-sm text-center">
                    {{ session('success') }}
                </div>
            @endif
            <form action="/login" method="POST" class="flex flex-col gap-5 border-secondary border-2 rounded-xl px-5 py-8 mb-10">
                @csrf

                <x-input class="w-65 md:w-100" id="username" label="USERNAME" name="username" >
                </x-input>

                <x-input class="w-65 md:w-100" id="password" label="PASSWORD" name="password" type="password">
                </x-input>
                <x-btn title="LOGIN" class="h-10 w-65 md:w-100">
                </x-btn>
            </form>
        </div>
    </div>
    @endsection
</div>