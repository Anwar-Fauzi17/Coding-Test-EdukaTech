@extends('layouts.landing')

@section('content')
<div class="jumbotron-background"></div>
<div class="jumbotron jumbotron-fluid ">
  
  

  <div class=" head text-white text-center mb-2">

    <div class="col-lg-12 col-md-12 col-sm-12">
        <p class="lead">Selamat Datang</p>
        <h1 class="header ">E-Training HTT.id</h1>
        <div class="container">
         <hr class="my-4">
         
        
        </div>
        <a class="btn  btn-lg bottom" href="{{ url('/register') }}" role="button">Daftar Sekarang</a>
       
       
    </div>
    
  </div>
  <!-- /.container -->
  
 
</div>
@endsection

