<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\public\img;

class MainController extends Controller
{
    public function showIndex(){
        return view('home');
    }

    public function showCards(){
        $cards = [
            [
                'id'=>1, 'title'=>"Продукт 1", 'price' => 500,
                'path' =>"img/1.jpg",
            ],
            [
                'id'=>2, 'title'=>"Продукт 2", 'price' => 600,
                'path' =>"img/1.jpg",
            ]
            ];
            return view('home',compact('cards'));
    }
}
