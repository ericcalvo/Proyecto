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
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\ReportBug;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Session;
//use Srmklive\PayPal\Services\PayPal as PayPal;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class MultijuegosController extends Controller
{
    public function multijuegos()
    {
        if(Auth::user()->is_premium == 0){
            $data['juegos'] = Game::where('is_premium','=','0')->paginate(4);
        }
        else{
            $data['juegos'] = Game::paginate(4);
        }

        return view('multijuegos', $data);
    }

    public function reportBug()
    {
        $data['juegos'] = Game::all();
        return view('reportBug',$data);
    }

    public function sendbug(Request $request)
    {   
        $validated = $request->validate([
            'juego' => 'required',
            'report' => 'required'
        ]);

        $user = $request->user_id;
        $juego = $request->input('juego');
        $text = $request->input('report');
        $data['juego'] = $juego;
        $data['text'] = $text;

        $create = DB::table('bugreport')
        ->insert(['user' => $user, 'game' => $juego, 'comment' => $text]);

        Mail::to(Auth::user()->email)->send(new ReportBug($data));

        
        return redirect('multijuegos');
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
        $data['cats'] = Category::paginate(4);

        return view('categorias',$data);
    }

    public function lista_juegos(Request $request)
    {
        $array_url = explode('/', $request->url());
        $pos = sizeof($array_url) - 1;
        $categoria_nom = $array_url[$pos];
        //$data['cat'] = $data['cat'][$pos];

        $query = DB::table('category')->where('name',$categoria_nom)->first();

        $id_cat = $query->id;


        if(Auth::user()->is_premium == 0){
            $data['juegos'] = Game::where('is_premium','=','0')->where('category', '=', $id_cat)->paginate(3);
        }
        else{
            $data['juegos'] = Game::where('category', '=', $id_cat)->paginate(3);
        }


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

    public function admin()
    {      
        if(Auth::user()->is_admin == 1)
            return view('admin');
        else
            return view('portada');
    }
}
