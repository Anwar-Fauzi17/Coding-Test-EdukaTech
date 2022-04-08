<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatihan;
use App\Models\Datauser;
use Carbon\Carbon;
use App\Mail\RegisterMail;
class DatauserController extends Controller
{
  Public function index(){
      $pel = pelatihan::all();
      $data = array(
            
            'pelatihan' => $pel
        );  
      return view('user.register',$data);
  }
  public function simpan(Request $request){
        
    $validate = Datauser::where('email',$request->email)->count();
    if( $validate > 0 ){
             return redirect()->back()->with("error", "Maaf Anda telah terdaftar sebagai Peserta training.");
    }else{
        
    }
        $data= new Datauser();
        $data->nama =  $request->nama;
        $data->telp = $request->telp;
        $data->email =$request->email;
        $data->tanggal =$request->tanggal;
        $data->tempat =$request->tempat;
        $data->alamatdom =$request->alamatdom;
        $data->kel =$request->kel;
        $data->namains =$request->instansi;
        $data->alamatins =$request->alamatins;
        $data->pek =$request->pek;
        $data->jabatan =$request->jabatan;
        $data->pelatihan =$request->pelatihan;
        $data->created_at =carbon::now();
        $data->save();
   
       
        $mail = [
        'username' => $request->nama
        ];
            if($data){
                 \Mail::to($request->email)->send(new RegisterMail($mail));
                return redirect()->back()->with("success", "Selamat Anda Berhasil Mendaftar Training.");
            }else{
                return redirect()->back()->with("error", "Maaf Anda gagal Mendaftar Training .");
            }
  }
}
