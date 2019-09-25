<?php

namespace App\Http\Controllers;
use App\ModelKontak;
use Illuminate\Http\Request;
use Session;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function cek(Request $req){
        $this->validate($req,[
            'email'=>'required',
            'password'=>'required'
        ]);
        $proses=ModelKontak::where('email',$req->email)->where('password',$req->password)->first();
        if(count($proses)>0){
            Session::put('id_kontak',$proses->id_kontak);
            Session::put('email',$proses->email);
            Session::put('password',$proses->password);
            Session::put('nama',$proses->nama);
            Session::put('hak_akses',$proses->hak_akses);
            Session::put('login_status',true);
            return redirect('/');
        } else {
            Session::flash('alert_pesan','Email dan Password tidak cocok');
            return redirect('login');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('login');
    }
}
