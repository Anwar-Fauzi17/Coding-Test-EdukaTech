@extends('layouts.landing')

@section('content')

<div class="container-fluid pt-5  mx-auto ">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-6 col-lg-8 col-md-9 col-11 text-center">
       
        <div class="card pr">
         
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
            
            <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-12 flex-column d-flex"><h2><b>Tambah Data Training</b></h2></div>
                     
                      
                </div>
            <form class="form-horizontal" action="{{url('/simpanpelatihan')}}" method="POST" >

                 @csrf
                 
                <div class="row justify-content-between text-center">
                    <div class="form-group col-sm-12 flex-column d-flex pt-3 pb-3"> Masukan Nama Training <input type="text" id="nama" name="nama" placeholder="Masukan Nama Pelatihan" required > </div>
                    
                </div>

                <div class="row justify-content-end">
                    <div class="form-group col-sm-12 pt-3 "> <button type="submit" class="btn"><b>Simpan</b></button> </div>
                </div>
            </form>
            
        </div>
        </div>
    </div>
</div>


@endsection