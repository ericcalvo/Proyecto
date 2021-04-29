<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Game;
use Illuminate\Support\Facades\DB;



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
        
        $array_url = explode('/', $request->url());
        $pos = sizeof($array_url) - 1;
        $categoria_nom = $array_url[$pos];
        //$data['cat'] = $data['cat'][$pos];

        $query = DB::table('category')->where('name',$categoria_nom)->first();

        $id_cat = $query->id;

        $data['cat_id'] = $id_cat;

        return view('juegos_cat',$data);
    }

    public function juego(Request $request)
    {
        $array_url = explode('/', $request->url());
        $pos = sizeof($array_url) - 1;
        $juego_nom = $array_url[$pos];
        $query = DB::table('games')->where('name',$juego_nom)->first();

        $data['juego_nom'] = $query->name;
        $data['juego_desc'] = $query->description;
        $data['juego_img'] = $query->image;

        return view('juego',$data);
    }
}
