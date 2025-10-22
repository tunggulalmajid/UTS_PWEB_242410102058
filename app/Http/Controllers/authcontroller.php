<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authcontroller extends Controller
{
    protected $listUser = [
        [
            'username' => 'tunggul',
            'password' => 'tung123',
            'email' => 'tunggul@gmail.com',
            'telepon' => '08123456789',
            'alamat' => 'Patrang'
        ],
        [
            'username' => 'ddd',
            'password' => 'kkk',
            'email' => 'Demon@gmail.com',
            'telepon' => '08123488889',
            'alamat' => 'Arjasa'
        ],
    ];
        
    
      public function login(Request $request)
    {

        $usernameFromForm = $request->input('username');
        $passwordFromForm = $request->input('password');

        foreach ($this -> listUser as $users){
            if ($usernameFromForm === $users['username'] && $passwordFromForm === $users['password']) {
            $request->session()->put('username', $usernameFromForm);
            $request->session()->put('email', $users['email']);
            $request->session()->put('telepon', $users['telepon']);
            $request->session()->put('alamat', $users['alamat']);
            return redirect('/dashboard');
        }
    }
    return back()->with('error', 'username atau password salah');
}

    public function logout(Request $request){
        $request->session()-> forget('username');
        return redirect ('/');
    }
    
}
