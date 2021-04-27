<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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
        
        return view('categorias');
    }
}
