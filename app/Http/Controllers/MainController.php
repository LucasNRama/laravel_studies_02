<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView() : View
    {
        // método 1
       /*  
       $data = [
             'name' => "joão Ribeiro",
             'phone' => "123456789" 
        ];
        return view('admin.newPage3', $data); 
        */
        
        // método 2
        /* 
        return view('admin.newPage3', [
            'name' => "joão Ribeiro",
            'phone' => "123456789" 
        ]); 
        */

        // método 3
        /* 
        return view('admin.newPage3')
                ->with('name', "joão ribeiro")
                ->with('phone', "1234567890"); 
        */

        // método 4
        $name = "João Ribeiro";
        $phone = "1234567890";

        return view('admin.newPage3', compact('name', 'phone'));
    }
}
