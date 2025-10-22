<div>
    @extends('layout.outer')
    @section('body-out')
    <div class=" my-20 flex justify-center items-center gap-40">
        <div>
        <h3>STORY ABOUT</h3>
        <h1>CHOCOFFEY</h1>
        <P class="max-w-80 mb-5">
            Menghadiran Perpaduan Rasa Coklat dan Kopi
        </P>
        
        <x-btn href="/login" title="LOGIN" class="h-10 w-100"></x-btn>
        </div>
        <img src="{{Vite::asset('resources/assets/img/heroimage.png')}}" alt="">
        
    </div>
    @endsection
</div>
