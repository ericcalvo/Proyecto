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
            $data['categorias']=Category::all();
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
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            
            $name = $request->input('name');
            $categoria = $request->input('categoria');
            $desc = $request->input('desc');
            $premium = $request->input('premium');
            if($request->image == null){
                $path = "";
            }else{
                $imageName = time().'.'.$request->image->extension();  

                $path = $request->file('image')->storeAs('games/'.$name,$imageName); 
            }

            //$request->image->move(public_path('images'), $imageName);

            $create = DB::table('games')
            ->insert(['id' => count(Game::all())+1,'name' => $name, 'category' => $categoria, 'description' => $desc,'is_premium' => $premium,'image' => $path]);

            return redirect('indexgames');
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
    public function showgame($id)
    {
        if(Auth::user()->is_admin == 1)
        {
            $data['juego'] = Game::find($id);
            $data['category'] = Category::all();

            return view('showgame',$data);
        }else{
            return view('portada');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editgame(Request $request,$id)
    {
        if(Auth::user()->is_admin == 1)
        {
            if($request->name == null){
                $name = Game::find($id)->name;
            }else{
                $name = $request->input('name');
            }

            $category = $request->input('categoria');

            if($request->desc == null){
                $desc = Game::find($id)->description;
            }else{
                $desc = $request->input('desc');
            }
            $premium = $request->input('premium');

            if($request->image == null)
            {
                $path = Game::find($id)->image;
            }else{
                $imageName = time().'.'.$request->image->extension();  
                
                $path = $request->file('image')->storeAs('game/'.$id,$imageName);
                if(Storage::exists(Game::find($id)->image)){
                    Storage::delete(Game::find($id)->image);
                }
            }

            $update = DB::table('games')
                ->where('id', $id)
                ->update(['name' => $name, 'category' => $category, 'description' => $desc, 'is_premium' => $premium,'image' => $path]);
            
                return redirect("indexgames");
        }else{
            return view('portada');
        }
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
    public function destroygame($id)
    {
        // if($request->profileimage == null)
        // {
        //     $path = Auth::user()->profilephoto;
        // }else{
        //     $imageName = time().'.'.$request->profileimage->extension();  
            
        //     $path = $request->file('profileimage')->storeAs('images/'.Auth::user()->id,$imageName);
        //     if(Storage::exists(Auth::user()->profilephoto)){
        //         Storage::delete(Auth::user()->profilephoto);
        //     }
        // }
        DB::table('games')->where('id', '=', $id)->delete();

        return redirect('indexgames');
    }
}
