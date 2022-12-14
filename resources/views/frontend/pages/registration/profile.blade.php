@extends('frontend.master')
@section('content')
<div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> 
    <div class="card p-4"> 
        <div class=" image d-flex flex-column justify-content-center align-items-center"> 
            <button class="btn btn-secondary"> 
                <img src="{{url('/uploads/',auth()->user()->image)}}" height="100" width="100" />\
            </button> 
                <span class="name mt-3">{{ auth()->user()->name }}</span> 
                <span class="idd">{{ auth()->user()->email }}</span> 
                <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
                    <span class="idd1">{{ auth()->user()->address }}</span> 
                    <span><i class="fa fa-copy"></i></span> 
                </div> 
                <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
                        <span class="follow">{{ auth()->user()->role }}</span>

                    </div> 
                    <div class=" d-flex mt-2"> 
                        <a href="{{ route('profile.edit',auth()->user()->id) }}"><button class="btn1 btn-dark">Edit Profile</button></a> 
                    </div> 
                    
                </div> 
            </div>
</div>
@endsection