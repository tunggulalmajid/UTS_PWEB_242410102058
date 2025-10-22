<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public $defaultListOrder = [
            ['id' => 1, 'nama' => 'Almajid', 'menu' => 'Choco Toast', 'jumlah' => 1, 'harga' => 8000],
            ['id' => 2, 'nama' => 'Pleki', 'menu' => 'Coffe Toast', 'jumlah' => 1, 'harga' => 8000],
            ['id' => 3, 'nama' => 'Almajid', 'menu' => 'Coffe Toast', 'jumlah' => 1, 'harga' => 8000],
            ['id' => 4, 'nama' => 'Almajid', 'menu' => 'Coffe Drink', 'jumlah' => 1, 'harga' => 7000]
        ];

    public $defaultListMenu = [
            ['id' => 1, 'menu' => 'Coffe Toast', 'harga' => 8000],
            ['id' => 2, 'menu' => 'Choco Toast', 'harga' => 8000],
            ['id' => 3, 'menu' => 'Coffe Drink', 'harga' => 7000],
            ['id' => 4, 'menu' => 'Choco Drink', 'harga' => 7000]
        ];

    public function onBoardingPage(){
        return view('onboarding');
    }
    public function loginPage(){
        return view('login');
    }

    public function dashboardPage(Request $request){
        $username = $request->session()->get('username');

        if (!$request->session()->has('listOrder')) {
            $request->session()->put('listOrder', $this->defaultListOrder);
        }

        $listOrder = $request->session()->get('listOrder');

        if (!$request->session()->has('listMenu')) {
            $request->session()->put('listMenu', $this->defaultListMenu);
        }

        $listMenu = $request->session()->get('listMenu');

        return view('dashboard', compact('username', 'listOrder', 'listMenu'));
    }

    public function profilePage(Request $request){
        $username = $request->session()->get('username');
        $email = $request->session()->get('email');
        $telepon = $request->session()->get('telepon');
        $alamat = $request->session()->get('alamat');
        return view('profile', compact('username','email', 'telepon','alamat'));
    }


    public function kelolaorderPage(Request $request){
        
        if (!$request->session()->has('listOrder')) {
            $request->session()->put('listOrder', $this->defaultListOrder);
        }

        $listOrder = $request->session()->get('listOrder');
        
        return view('kelolaorder', compact('listOrder'));
    }

    public function simpanOrder(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'menu' => 'required|string',
            'jumlah' => 'required|integer|min:1',
            'harga' => 'required|integer|min:0',
        ]);

        $listOrder = $request->session()->get('listOrder', []);

        $newOrder = [
            'id' => count($listOrder) > 0 ? max(array_column($listOrder, 'id')) + 1 : 1, 
            'nama' => $validated['nama'],
            'menu' => $validated['menu'],
            'jumlah' => $validated['jumlah'],
            'harga' => $validated['harga'],
        ];

        $listOrder[] = $newOrder;
        $request->session()->put('listOrder', $listOrder);
        return redirect()->route('kelolaorder');
    }

    public function kelolamenuPage(Request $request){
        if (!$request->session()->has('listMenu')) {
            $request->session()->put('listMenu', $this->defaultListMenu);
        }

        $listMenu = $request->session()->get('listMenu');
        return view('kelolamenu', compact('listMenu'));
    }

     public function simpanMenu(Request $request)
    {
        $validated = $request->validate([
            'menu' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
        ]);

        $listMenu = $request->session()->get('listMenu', []);

        $newMenu = [
            'id' => count($listMenu) > 0 ? max(array_column($listMenu, 'id')) + 1 : 1, 
            'menu' => $validated['menu'],
            'harga' => $validated['harga']
        ];

        $listMenu[] = $newMenu;
        $request->session()->put('listMenu', $listMenu);
        return redirect()->route('kelolamenu');
    }

    public function app(){
        return view('layout/app');
    }

}
