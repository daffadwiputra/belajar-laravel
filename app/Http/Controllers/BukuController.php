<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\User;
use App\Penerbit;;
use Auth;

class BukuController extends Controller
{
    
    public function index(){

        //insert single
        // $user = new Buku;
        // $user -> judul = 'Dwiputra';
        // $user -> penerbit = '456';
        // $user -> save();

        //insert mass
        // Buku::create([
        //     'judul' => 'Damarriyanto',
        //     'penerbit' => '654'
        // ]);

        //update single
        // $user = Buku::where('judul', 'Damarriyanto')->first();
        // $user -> judul = 'Damar';
        // $user -> penerbit = '654';
        // $user -> save();

        //update mass
        // Buku::find(4)->update([
        //     'judul' => 'Yanto',
        //     'penerbit' => '654'
        // ]);

        //delete single
        // $user = Buku::find(1);
        // $user -> delete();

        //delete mass
        // Buku::destroy([3,4]);

        //restore soft deletes
        // Buku::withTrashed()->restore();

        $buku = Buku::all();
        return view('Test', ['buku' => $buku]);
    }

    public function indexAdmin(){

        if(!Auth::user()-> admin){
            return redirect()->route('buku');
        }

        $buku = Buku::all();
        $user = User::all();
        
        return view('TestAdmin', ['buku' => $buku, 'user' => $user]);
    }

    public function show($id){
        $buku = Buku::find($id);
        if (!$buku) {
            abort(404);
        }

        return view('TestLagi', ['id' => $id,'buku' => $buku]);
    }

    public function create(){
        $penerbit = Penerbit::all();
        return view('Form.FormCreate',['penerbit' => $penerbit]);
    }

    public function store(Request $request){
        $this -> validate($request,[
            'judul' => 'required',
            'id_penerbit' => 'required'
        ]);

        Buku::create([
            'judul' => $request -> judul,
            'id_penerbit' => $request -> id_penerbit
        ]);
        
        if(Auth::user()-> admin){
            return redirect()->route('dashboard');
        }
        return redirect()->route('buku');
        
    }

    public function edit($id){
        $buku = Buku::find($id);
        if (!$buku) {
            abort(404);
        }

        return view('Form.FormEdit', ['buku' => $buku]);
    }

    public function update(Request $request, $id){
        $this -> validate($request,[
            'judul' => 'required',
            'id_penerbit' => 'required'
         ]);
        
        Buku::find($id)->update([
            'judul' => $request -> judul,
            'id_penerbit' => $request -> id_penerbit
        ]);

        if(Auth::user()-> admin){
            return redirect()->route('dashboard');
        }
        return redirect()->route('buku');
    }

    public function destroy($id){

        Buku::destroy([$id]);

        if(Auth::user()-> admin){
            return redirect()->route('dashboard');
        }
        return redirect()->route('buku');

    }

    public function restore() {

        Buku::withTrashed()->restore();

        if(Auth::user()-> admin){
            return redirect()->route('dashboard');
        }
        return redirect()->route('buku');
    }
}
