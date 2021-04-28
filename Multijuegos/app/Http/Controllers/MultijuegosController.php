<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Game;

class MultijuegosController extends Controller
{

    public function game()
    {
        //
        return view('game');
    }
    public function bug()
    {
        //
        return view('bug');
    }

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    public function cat_show()
    {
        $data['cats'] = Category::all();

        return view('categorias',$data);
    }

    public function lista_juegos(Request $request)
    {
        $data['juegos'] = Game::all();
        //$categoria = Category::find(where('name', explode('/', $request->url())[sizeof(explode('/', $request->url()))-1]));



        //$data['cat'] = $categoria;
        return view('juegos_cat',$data);
    }

    public function juego($name)
    {/*
        $juegos = Game::all();

        $juego = $juegos->find($name);

        return view('juego',$juego);*/
    }
}
