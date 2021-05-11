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
use Illuminate\Support\Facades\Auth;

class MultijuegosController extends Controller
{
    public function multijuegos()
    {
        $data['juegos'] = Game::all();

        return view('multijuegos', $data);
    }

    public function reportBug()
    {
        return view('reportBug');
    }

    public function editUser()
    {
        return view('editauser');
    }

    public function updateUserProfile(Request $request)
    {

        $validated = $request->validate([
            'name' => 'nullable',
            'email' => 'nullable',
            'password' => 'nullable|same:passwd2|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/',
            'profileimage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $id = $request->input('id');
        if($id = Auth::user()->id)
        {               
            if($request->name == null)
            {
                $name = Auth::user()->name;
            }else
            {
                $name = $request->input('name');
            }

            if($request->email == null)
            {
                $email = Auth::user()->email;
            }else
            {
                $email = $request->input('email');
            }
            if($request->password == null)
            {
                $password = Auth::user()->password;
            }else
            {
                $password = Hash::make($request->input('password'));
            }
            if($request->profileimage == null)
            {
                $path = Auth::user()->profilephoto;
            }else{
                $imageName = time().'.'.$request->profileimage->extension();  
                
                $path = $request->file('profileimage')->storeAs('images/'.Auth::user()->id,$imageName);
                if(Storage::exists(Auth::user()->profilephoto)){
                    Storage::delete(Auth::user()->profilephoto);
                }
            }

            $update = DB::table('users')
                ->where('id', $id)
                ->update(['name' => $name, 'email' => $email, 'password' => $password,'profilephoto' => $path]);
        }
        return redirect('multijuegos');
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
        $juego_nom = implode(" ",explode('%20',$array_url[$pos]));
        $query = DB::table('games')->where('name',$juego_nom)->first();
        
        $data['juego_nom'] = $query->name;
        $data['juego_desc'] = $query->description;
        $data['juego_img'] = $query->image;
        $data['juego->id'] = $query->id;
        $data['game'] = $query->game;
        return view('juego',$data);
    }

    public function jugar($juego)
    {

        return view('jugar',$juego);
    }

    public function comprarPremium(Request $request)
    {
        return view('comprarpremium');
    }
}
