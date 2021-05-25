<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Game;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Storage;
use ZipArchive;
use ZanySoft\Zip\Zip;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\ReportBug;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;


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

    public function indexcats()
    {
        if(Auth::user()->is_admin == 1)
        {
            $data['cats'] = Category::all();
            return view('indexcats',$data);
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

    public function createcat()
    {
        if(Auth::user()->is_admin == 1)
        {
            return view('addcat');
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
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'game' => 'required|file|mimes:zip'
            ]);
            
            $name = $request->input('name');
            $categoria = $request->input('categoria');
            $desc = $request->input('desc');
            $premium = $request->input('premium');


            $create = DB::table('games')
            ->insert(['name' => $name, 'category' => $categoria, 'description' => $desc,'is_premium' => $premium]);
            
            $select  = DB::table('games')
            ->select('id')->where('name', '=', $name)
            ->get();

            $id = $select[0]->id;


            $imageName = time().'.'.$request->image->extension();  
            $path = $request->file('image')->storeAs('games/'.$id,$imageName); 
            
            //dd($request->game);

            $gameName = time().'.'.$request->game->extension();
            
            $path2 = $request->file('game')->storeAs(('games/'.$id.'/game'),$gameName);
                //Hacemos update para guardar cambios
            $affected = DB::table('games')
            ->where('name', $name)
            ->update(['image' => $path, 'game' => $path2]);

                //extraemos el zip
            $file = storage_path('app/'.$path2);
            $pathfile = storage_path('app/games/'.$id.'/');

            $zip = new ZipArchive();
            
            if ($zip->open($file, ZipArchive::RDONLY) === true) {
                $zip->extractTo($pathfile);
                $zip->close();
            }
            $gamepath = 'game/'.$id.'/'.$request->game;

            $affected = DB::table('games')
            ->where('name', $name)
            ->update(['game' => $gamepath]);

            return redirect('indexgames');
        }else{
            return view('portada');
        }
    }


    public function storecat(Request $request)
    {
        if(Auth::user()->is_admin == 1)
        {
            $validated = $request->validate([
                'name' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            
            $name = $request->input('name');

            $create = DB::table('category')
            ->insert(['name' => $name]);

            $select  = DB::table('category')
            ->select('id')->where('name', '=', $name)
            ->get();                

            if($request->image == null){
                $path = "";
            }else{
                $imageName = time().'.'.$request->image->extension();  
    
                $path = $request->file('image')->storeAs('category/'.$select[0]->id,$imageName); 
            }

            $affected = DB::table('category')
            ->where('name', $name)
            ->update(['image' => $path]);
            return redirect('indexcats');
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


    public function showcat($id)
    {
        if(Auth::user()->is_admin == 1)
        {
            $data['cat'] = Category::find($id);

            return view('showcat',$data);
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


    public function editcat(Request $request,$id)
    {
        if(Auth::user()->is_admin == 1)
        {
            if($request->name == null){
                $name = Category::find($id)->name;
            }else{
                $name = $request->input('name');
            }

            if($request->image == null)
            {
                $path = Category::find($id)->image;

            }else{
                $imageName = time().'.'.$request->image->extension();  
                
                $path = $request->file('image')->storeAs('category/'.$name,$imageName);
                if(Storage::exists(Category::find($id)->cat_image)){
                    Storage::delete(Category::find($id)->cat_image);
                }

            }


            $update = DB::table('category')
                ->where('id', $id)
                ->update(['name' => $name,'image' => $path]);
            
                return redirect("indexcats");
        }else{
            return view('portada');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroygame($id)
    {
        if(Auth::user()->is_admin == 1)
        {
            $path = Game::find($id)->image;
            if(Storage::exists($path)){
                Storage::delete($path);
            }
            
            DB::table('games')->where('id', '=', $id)->delete();

            return redirect('indexgames');
        }else{
            return view('portada');
        }
    }

    public function destroycat($id)
    {
        try{
            $path = Category::find($id)->cat_image;
            if(Storage::exists($path)){
                Storage::delete($path);
            }
            
            DB::table('category')->where('id', '=', $id)->delete();

        }catch(Exception $e){
            return ('No se puede realizar la accion debido a:'.$e);
        }

        return redirect('indexcats');
    }

    public function proves()
    {      
        Mail::to('albert.bernadas.fabra@gmail.com')->send(new ReportBug());

        return ("totok");
    }
}
