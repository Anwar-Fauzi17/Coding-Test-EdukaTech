@extends('layouts.landing') @section('content')

<div class="container ">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-12">
            <div class="card" style="border-radius: 15px">
                <div class="card-body text-center">
                    @if(empty($user->profil))
                    <div class="mt-3 mb-4 text-center">
                        <div class="card profil">
                                 <h4 class="mb-2">{{ Str::limit($user->name,1)}}</h4>
                        </div>
                    </div>
                    @else
                    <div class="mt-3 mb-4 text-center">
                        <div
                            class="rounded-circle img-fluid shadow-sm"
                            style=" width: 100px; height: 100px; margin:0 auto;  background-position: center;
                                background-repeat: no-repeat;
                                background-size: cover;
                                position: relative; background-image:url('{{asset('/imgprofil/'.$user->profil)}}')"
                        ></div>
                    </div>
                    @endif
                    <h4 class="mb-2">{{$user->name}}</h4>
                    <p class="text-muted mb-4 text-center">
                        Email <span class="mx-2">|</span> {{$user->email}}
                    </p>
                    <p class="text-muted mb-4 text-center">
                        Username <span class="mx-2">|</span> {{$user->username}}
                    </p>
                    
                    <a
                        href="{{'/logout'}}"
                        class="btn btn-rounded btn-lg mb-3"
                        > Logout</a
                    >
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
