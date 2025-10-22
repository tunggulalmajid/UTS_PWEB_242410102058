<div>
    @extends('layout.outer')
    @section('body-out')
    <div class=" my-10 md:my-20 flex flex-col-reverse lg:flex-row justify-center items-center gap-10 lg:gap-40">
        <div class="lg:text-start text-center">
        <h3>STORY ABOUT</h3>
        <h1>CHOCOFFEY</h1>
        <P class="max-w-80 mb-5 mx-auto lg:mx-0">
            Menghadiran Perpaduan Rasa Coklat dan Kopi
        </P>
        
        <x-btn href="/login" title="LOGIN" class="h-10 w-50 md:w-100"></x-btn>
        </div>
        <img src="{{Vite::asset('resources/assets/img/heroimage.png')}}" alt="" class="w-65 md:w-85">
        
    </div>
    @endsection
</div>
