@extends('layouts.landing')

@section('content')
<style>
.owl-carousel .owl-stage {
    margin:0 auto;
}
</style>
<div class="container  mx-auto">         
    <div class="row d-flex justify-content-center pt-2 ">

        <div class="col-lg-10 col-md-12 col-sm-12 pt-5">
           <div class="card  bgcard">
               <h1>Hi {{$user->name}}</h1>
               <p>{{ Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}</p>
               
           </div>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-6 col-6 pt-5">
           <div class="card dash">
              <label class="text-center px-3 pt-3">Total Pendaftar Training</label> 
                <div class=" mb-3 text-center mt-2"><b> <h1 class="text-center " style=" font-size: 2.5em;">{{ $per}}</h1></b></div>
                <a href="{{ url('/user') }}" class="btn "> Cek Data Pendaftar</a>
           </div>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-6 col-6 pt-5">
           <div class="card dash">
               <label class="text-center px-3 pt-3">Total Data Training</label> 
               <div class=" mb-3 text-center mt-2"><b> <h1 class="text-center " style=" font-size: 2.5em;">{{ $pel}}</h1></b></div>
                <a href="{{ url('/pelatihan') }}" class="btn "> Cek Data Pendaftar</a>
           </div>
        </div>
        <label class="text-center px-3 pt-3"><h3>Peminat Pelatihan</h3></label> 
        <div class="owl-carousel pelatihan owl-theme">
            @if(count($all) == 0 )
          <p class=" text-center " >No Record Found</p>
            @else
            @foreach($all as $an)
             <div class="card pr">
               <p>{{$an->nama}}</p>
               <p>{{$an->count}}</p>
            </div>
             @endforeach
            @endif
             
            </div>

    </div>
</div>

@endsection

