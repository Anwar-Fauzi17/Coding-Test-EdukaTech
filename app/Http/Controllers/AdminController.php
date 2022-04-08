<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Carbon\Carbon;
use App\Mail\RegisterAdminMail;
use App\Models\Pelatihan;
use App\Models\Datauser;
use DataTables;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    Public function index(){
      $pel = pelatihan::all();
     
      $data = array(
            
            'pelatihan' => $pel
        );  
      return view('admin.login');
  }
  public function dataTablepelatihan(Request $request)
    {
        if ($request->ajax()) {
            $datas = Pelatihan::all();
            return DataTables::of($datas)
                ->addIndexColumn() //memberikan penomoran
                
                //merender content column dalam bentuk html
                ->escapeColumns()  //mencegah XSS Attack
                ->toJson(); //merubah response dalam bentuk Json
        } 
    }
  
    public function dataTableuser(Request $request)
    {
        if ($request->ajax()) {
            $datas = Datauser::all();
            return DataTables::of($datas)
                ->addIndexColumn() //memberikan penomoran
                ->addColumn('name',function($row){ //menambahkan column baru pada yajra datatable
                    $nama = $row->name;
                    return $nama;
                })
                ->editColumn('Pelatihan', function($row){ //mengedit column pada yajra datatable 
                    $pelatihan = Pelatihan::where('id_pel',$row->pelatihan)->value('nama_pelatihan');
                    return $pelatihan;
                })
                ->editColumn('Mendaftar', function($row){ //mengedit column pada yajra datatable 
                    $daftar = Carbon::parse($row->created_at)->isoFormat('dddd, D MMMM Y');
                    return $daftar;
                })
                //merender content column dalam bentuk html
                ->escapeColumns()  //mencegah XSS Attack
                ->toJson(); //merubah response dalam bentuk Json
        } 
    }
  Public function indexadmin(Request $request){
   if(!$request->session()->get('username'))
        {
            return redirect('/login-admin')->with("error", "Session anda habis. Silahkan login kembali.");
        }
       $user = admin::where('username',$request->session()->get('username'))->first();
       $pel = pelatihan::count();
       $pelatihan = Pelatihan::join('datauser','datauser.pelatihan','pelatihan.id_pel')->select(DB::raw('count(*) as count'), 'pelatihan.id_pel as id_pel','pelatihan.nama_pelatihan as nama')->groupBy('pelatihan')->orderBy('count', 'desc')->get();
       $per = Datauser::count();
       $data = array(
         'user' => $user,
         'per' =>$per,
        'pel' => $pel,
        'all' => $pelatihan,
        );
      return view('admin.dashboard',$data);
  }
  Public function indexadminprofil(Request $request){
   if(!$request->session()->get('username'))
        {
            return redirect('/login-admin')->with("error", "Session anda habis. Silahkan login kembali.");
        }
       $user = admin::where('username',$request->session()->get('username'))->first();
      
       $data = array(
         'user' => $user,
        
        );
      return view('admin.profil',$data);
  }
   Public function indexadminpel(Request $request){
   if(!$request->session()->get('username'))
        {
            return redirect('/login-admin')->with("error", "Session anda habis. Silahkan login kembali.");
        }
     
      return view('admin.pelatihan');
  }
  Public function indexadminuser(Request $request){
   if(!$request->session()->get('username'))
        {
            return redirect('/login-admin')->with("error", "Session anda habis. Silahkan login kembali.");
        }
     
      return view('admin.datauser');
  }
  Public function indextambahpelatihan(Request $request){
   if(!$request->session()->get('username'))
        {
            return redirect('/login-admin')->with("error", "Session anda habis. Silahkan login kembali.");
        }
     
      return view('admin.tambahpelatihan');
  }
  public function login(Request $request){
    
    $validate = Admin::where('username',$request->Username)->where('password',md5($request->password))->count();
    if( $validate > 0 ){
          $request->session()->put("username", $request->Username);
             return redirect('/dashboard')->with("success", "Anda Berhasil Login.");
    }else{
        return redirect()->back()->with("error", "Maaf Username atau password anda salah.");
    }
  }
  public function logout(Request $request) {
        
        $request->session()->flush();
        
        return Redirect('/login-admin')->with("success", "Anda Berhasil Logout.");
    }

  public function simpantraining(Request $request){
    $validate = Pelatihan::where('nama_pelatihan',$request->nama)->count();
    if( $validate > 0 ){
             return redirect()->back()->with("error", "Pelatihan Sudah Ada.");
    }else{
       $data= new Pelatihan();
        $data->nama_pelatihan = $request->nama;
        $data->created_at =carbon::now();
        $data->save();
        if($data){
               
                return redirect('/pelatihan');
            }else{
                return redirect()->back()->with("error", "Maaf Anda gagal menambah data training.");
            }
    }
  }
  Public function simpan(Request $request){
    $validate = Admin::where('email',$request->email)->count();
    $validateusername = Admin::where('username',$request->username)->count();
     if( $validateusername > 0 ){
             return redirect()->back()->with("error", "Maaf Username Telah digunaakan.");
    }
    if( $validate > 0 ){
             return redirect()->back()->with("error", "Maaf Anda telah terdaftar sebagai admin.");
    }else{
        $data= new Admin();
        $data->name =  $request->nama;
        $data->email =$request->email;
        $data->username =$request->username;
        $data->password =md5($request->password);
        $data->created_at =carbon::now();
        $data->save();
   
       
        $mail = [
        'name' =>$request->nama,
        'username' => $request->username,
        'password' => $request->password

        ];
            if($data){
                 \Mail::to($request->email)->send(new RegisterAdminMail($mail));
                return redirect()->back()->with("success", "Selamat Anda Berhasil Mendaftar sebagai admin.");
            }else{
                return redirect()->back()->with("error", "Maaf Anda gagal Mendaftar sebagai admin.");
            }
  
    }
        
  }

}
