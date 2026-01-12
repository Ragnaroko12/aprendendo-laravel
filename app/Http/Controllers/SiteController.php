<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
        public function index (){
        $name = 'luis';
        $habitos = ['jogar','estudar','ler'];

        return view("\components\inicio" ,[
            'name' => $name,
            'habitos' => $habitos
        ]);
    }

    public function dashboard()
    {
        return view('components.dashboard');
    }
}
