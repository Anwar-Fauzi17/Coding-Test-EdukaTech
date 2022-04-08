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
                    <div class="form-group col-sm-12 flex-column d-flex"><h2><b>Formulir Pendaftaran Training</b></h2></div>
                      <div class="form-group col-sm-12 flex-column d-flex"><p class="form"><b>Berikut ini adalah formulir yang harus kamu isi sebagai syarat pendaftaran training di Htt.id</b></p></div>
                      
                </div>
            <form class="form-horizontal" action="{{url('/simpandaftar')}}" method="POST" >

                 @csrf
                 <div class="row justify-content-between">
                    <div class="form-group col-sm-12 pt-2 flex-column d-flex"><h6>Informasi diri anda</h6></div>
                    
                </div>
                <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nama Lengkap<span class="text-danger"> *</span></label> <input type="text" id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda" required > </div>
                     <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nomor WhatsApp<span class="text-danger"> *</span></label> <input type="number" id="telp" name="telp" placeholder="Pastikan nomor anda aktif"  required > </div>
                </div>
                <div class="row justify-content-between text-left">
                      <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="email" id="email" name="email" placeholder="Masukan Email Anda" required> </div>
                     <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Tanggal Lahir<span class="text-danger"> *</span></label> <input type="date" id="date" name="tanggal" placeholder="" required> </div>
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Tempat Lahir<span class="text-danger"> *</span></label> <input type="text" id="tempat" name="tempat" placeholder="Masukan Tempat Lahir Anda" required> </div>
                   
                     <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Alamat Lengkap Sesuai Domisili<span class="text-danger"> *</span></label> <input type="text" id="alamatdom" name="alamatdom" placeholder="Masukan alamat lengkap domisili" required> </div>
                      <div class="form-group col-sm-12 pt-3 pb-3  "> 
                    <label class="form-control-label px-3 pb-2">Jenis Kelamin<span class="text-danger"> *</span></label><br>
                        <input type="radio" name="kel" id="laki-laki" value="Laki-laki" required><label class="form-control-label px-3">Laki-Laki</label><input type="radio" name="kel" id="perempuan" value="perempuan"><label class="form-control-label px-3">Perempuan</label>
                    </div>
                </div>

              
                <div class="row justify-content-between ">
                    <div class="form-group col-sm-12 pt-4 pb-2 flex-column d-flex"><h6>Informasi Instansi Anda</h6></div>
                    
                </div>
                
                 
                <div class="row justify-content-between text-left">
                      <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nama Instansi<span class="text-danger"> *</span></label> <input type="text" id="instansi" name="instansi" placeholder="Masukan Nama Instansi Anda" required> </div>
                       <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Alamat Lengkap instansi<span class="text-danger"> *</span></label> <input type="text" id="alamatins" name="alamatins" placeholder="Masukan alamat lengkap instanis" required> </div>
                       <div class="form-group col-sm-6  "> 
                        <label class="form-control-label px-3 pb-2">Pekerjaan<span class="text-danger"> *</span></label><br>
                            <input type="radio" name="pek" id="Guru" value="Guru" required><label class="form-control-label px-3">Guru</label><input type="radio" name="pek" id="Dosen" value="Dosen"><label class="form-control-label px-3">Dosen</label><input type="radio" name="pek" id="Lainnya" value="Lainnya"><label class="form-control-label px-3">Lainnya</label>
                        </div>
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Jabatan<span class="text-danger"> *</span></label> <input type="text" id="jabatan" name="jabatan" placeholder="Masukan Nama Instansi Anda" required> </div>
                </div>
                 <div class="row justify-content-between ">
                    <div class="form-group col-sm-12 pt-4 pb-2 flex-column d-flex"><h6>Pilih Pelatihan Yang Anda Inginkan</h6></div>
                    
                </div>
                <div class="row justify-content-between ">
                     <div class="form-group col-sm-12 flex-column d-flex">
                         <label class="form-control-label text-center px-3">Pilih Pelatihan<span class="text-danger"> *</span></label> 
                         <select   name="pelatihan" class="form-control text-center " required>
                            <option value="" >.:: Pilih Pelatihan Anda ::.</option>
                            @foreach($pelatihan as $pel)
                            <option value="{{ $pel->id_pel }}">{{ $pel->nama_pelatihan }}</option>
                            @endforeach
                        </select> 
                    </div>
                       
                   
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