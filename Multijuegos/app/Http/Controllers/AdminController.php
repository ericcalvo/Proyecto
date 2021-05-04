<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Game;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexgames()
    {
        if(Auth::user()->is_admin == 1)
        {
            $data['juegos'] = Game::all();
            $data['categorias']=Category::select('name');
            return view('indexgames',$data);
        }else{
            return view('portada');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creategame()
    {
        if(Auth::user()->is_admin == 1)
        {
            $data['categories'] = Category::all();
            return view('addgame',$data);
        }else{
            return view('portada');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storegame(Request $request)
    {
        if(Auth::user()->is_admin == 1)
        {
            $validated = $request->validate([
                'name' => 'required',
                'categoria' => 'required',
                'desc' => 'required|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            
            $name = $request->input('name');
            $categoria = $request->input('categoria');
            $desc = $request->input('desc');
            $image = $request->input('image');

            $imageName = time().'.'.$request->image->extension();  

            $path = $request->file('image')->storeAs('games/'.$name,$imageName);

            $create = DB::table('games')
            ->insert(['id' => count(Game::all())+1,'name' => $name, 'category' => $categoria, 'description' => $desc,'is_premium' => 0,'image' => $path]);

            return view('game/index');
        }else{
            return view('portada');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroygame()
    {

    }
}
