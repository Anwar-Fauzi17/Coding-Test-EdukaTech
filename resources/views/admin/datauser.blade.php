@extends('layouts.landing')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

<script src="https://use.fontawesome.com/3ead2fb9d4.js"></script>
<style>
     .dataTables_wrapper .dataTables_paginate .paginate_button {
    padding : 0px;
    margin-left: 0px;
    display: inline;
    border: 0px;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    border: 0px;
  color: white;
}
   
.table-responsive{
	overflow-x: auto;
}

select {
  
  text-align: center;
}

div.dataTables_wrapper {
        
        margin: 0 auto;
    }
@media only screen and (max-width: 600px) {
div.dataTables_wrapper {
        width: 100%;
        margin: 0 auto;
    } 
} 
</style>
<div class="container pt-5  mx-auto">
         
                
    <div class="row d-flex justify-content-center pt-2 ">
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-5">
           <div class="card dash">
              <label class="text-center px-3 pt-3"><h3><b>Data Pelatihan</b></h3></label> 
              
               <div class="table-responsive">
                <table id="dataTable" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nomor Telpon</th>
                            <th>Jns Kelamin</th>
                            <th>Alamat Domisili</th>
                            <th>Pekerjaan</th>
                            <th>Pelatihan</th>
                            <th>Mendaftar</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                 </table>
                </div>
                
            
                
           </div>
        </div>
        
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() { 
        fetch_data()
        function fetch_data(){                    
                $('#dataTable').DataTable({
                    "scrolly": false,
                    pageLength: 10,
                    lengthChange: true,
                    bFilter: true,
                    destroy: true,
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    autoWidth: false,
                    oLanguage: {
                        sZeroRecords: "Tidak Ada Data",
                        sSearch: "Pencarian _INPUT_",
                        sLengthMenu: "_MENU_",
                        sInfo: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                        sInfoEmpty: "0 data User",
                        oPaginate: {
                            sNext: "<i class='fa fa-angle-right'></i>",
                            sPrevious: "<i class='fa fa-angle-left'></i>"
                        }
                    },
                    ajax: {
                        url:"{{route('user.data')}}",
                        type: "GET"
                              
                    },
                    
                    columns: [
                        { 
                            data: 'DT_RowIndex',
                            name: 'DT_Row_Index', 
                            "className": "text-center" ,
                            orderable: false, 
                            searchable: false   
                        },
                        {
                            data: 'nama',

                        },
                        {
                            data: 'email',

                        },
                        {
                            data: 'telp',

                        },
                        {
                            data: 'kel',

                        },
                        {
                            data: 'alamatdom',

                        },
                        {
                            data: 'pek',

                        },
                        {
                            data: 'Pelatihan',

                        },
                         {
                            data: 'Mendaftar',

                        },
                        
                       
                         
                    ]
                });
            }         
    });
    </script>
@endsection

