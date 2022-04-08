@extends('layouts.landing')

@section('content')

<div class="container-fluid pt-5  mx-auto">
         
                
    <div class="row d-flex justify-content-center pt-2 ">
        <div class="col-lg-10 col-md-12 col-sm-12 pt-5">
           @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                    {{Session::get('error')}}
                    </div>
                @endif 
        </div>
        <div class="col-xl-4 col-lg-8 col-md-9 col-11 text-center">
           
            <div class="card pr">
         
              
                
                <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"><h2><b>Login Admin</b></h2></div>
                        <div class="form-group col-sm-12 flex-column d-flex"><p class="form"><b>Masukan Username Dan Password Anda</b></p></div>
                        
                    </div>
                <form class="form-horizontal" action="{{url('/masuk')}}" method="POST" >

                    @csrf
                   
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Username<span class="text-danger"> *</span></label> <input type="text" id="Username" name="Username" placeholder="Username" required > </div>
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Password<span class="text-danger"> *</span></label> <input type="password" id="Password" name="Password" placeholder="Password"  required > </div>
                    </div>
                
            
                    
    
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-12 pt-3 "> <button type="submit" class="btn"><b>Masuk</b></button> </div>
                    </div>
                </form>
            
            </div>
        </div>
        <div class="col-xl-4 col-lg-8 col-md-9 col-11 text-center">
            <div class="card pr">
         
              
                
                <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"><h2><b>Pendaftaran Admin</b></h2></div>
                        <div class="form-group col-sm-12 flex-column d-flex"><p class="form"><b>Berikut ini adalah formulir yang harus kamu isi sebagai syarat pendaftaran admin di Htt.id</b></p></div>
                        
                    </div>
                <form class="form-horizontal" action="{{url('/simpandaftaradmin')}}" method="POST" >

                    @csrf
                    
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nama Lengkap<span class="text-danger"> *</span></label> <input type="text" id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda" required > </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="Masukan Email Anda"  required > </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Username<span class="text-danger"> *</span></label> <input type="text" id="username" name="username" placeholder="Masukan Nama Lengkap Anda" required > </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Password<span class="text-danger"> *</span></label> <input type="password" id="Password" name="Password" placeholder="Password"  required > </div>
                    </div>
                
            
                    
    
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-12 pt-3 "> <button type="submit" class="btn"><b>Daftar Sekarang</b></button> </div>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
</div>
@endsection

