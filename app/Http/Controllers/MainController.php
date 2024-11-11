<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView() : View
    {
        $data = [
            'value' => 100,
            'cities' => ['New York', 'Los Angeles', 'Chicago'],
            'names' => ['a','b','c'],
            'indice' => 1
        ];
        return view('home', $data);
    }
    public function submitForm(Request $request) : void
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required|min:6'
        ]);

        echo 'formulário submetido com sucesso';
    }
}
