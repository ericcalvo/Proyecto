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
    public function categoria_show()
    {
        $categorias = Category::all();
        return view('categorias');
    }

    public function lista_juegos($id)
    {
        $data['juegos'] = Game::all();
        $data['id'] = $id;
        return view('juegos_cat',$data);
    }

    public function juego($name)
    {
        $juegos = Game::all();

        $juego = $juegos->find($name);

        return view('juego',$juego);
    }
}
