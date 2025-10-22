<div>
    @extends('layout.app')
    @section('title-section')
        Profile
    @endsection('title-section')
    @section('sub-title-section')
        Lihat Data Dirimu
    @endsection('title-section')
    @section('content-section')
    <div class="flex flex-col items-end w-200 ml-20">
         <div class="border-3 border-secondary mt-10 px-15 py-10 w-200 rounded-xl">
            <p>
                Username : {{$username}}
            </p>
            <p>
                Email : {{$email}}
            </p>
            <p>
                Nomor Telepon : {{$telepon}}
            </p>
            <p>
                Alamat : {{$alamat}}
            </p>
        </div>
        <form action="/logout" method="POST">
            @csrf
            <x-btn title="LOGOUT" class="w-40 h-10 mt-5"></x-btn>
        </form>
        
    </div>
       
    @endsection
</div>
