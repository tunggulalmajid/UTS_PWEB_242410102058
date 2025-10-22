<div>
    @extends('components.navbar')
    @section('nav-list')
    <img src="{{Vite::asset('resources/assets/img/hamburger.png')}}" alt="" class="w-8 sm:hidden" id="hamburger">
    <div class="hidden sm:flex sm:flex-row gap-8 tracking-[2] font-poppins font-bold cursor-pointer" id="nav-list">
        <a class="cursor-pointer" href="/dashboard">Dashboard</a>
        <a class="cursor-pointer" href="/kelolamenu">Menu</a>
        <a class="cursor-pointer" href="/kelolaorder">Order</a>
        <a class="cursor-pointer" href="/profile">Profile</a>
    </div>
    <script >
        document.addEventListener("DOMContentLoaded", function () {
        const menuIcon = document.querySelector("#hamburger");
        const navList = document.querySelector("#nav-list");
        menuIcon.addEventListener("click", () => {
            navList.classList.toggle("hidden");
            navList.classList.toggle("flex");
            navList.classList.toggle("flex-col");
        });
    });
    </script>
    @endsection
    
</div>
