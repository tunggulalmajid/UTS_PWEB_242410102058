<div>
    @extends('components.navbar')
    @section('nav-list')
    <div class="flex gap-8 tracking-[2] font-poppins font-bold cursor-pointer">
        <a class="cursor-pointer" href="/dashboard">Dashboard</a>
        <a class="cursor-pointer" href="/kelolamenu">Kelola menu</a>
        <a class="cursor-pointer" href="/kelolaorder">Kelola Order</a>
        <a class="cursor-pointer" href="/profile">Profile</a>
    </div>
    @endsection
</div>
