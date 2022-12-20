@extends('frontend.master')
@section('content')
<div class="container" style="margin-top:9rem !important">
    <div class="row">
      
        <div class="property-item mb-30">
          <a href="property-single.html" class="img">
            <img src="{{url('/uploads/',$project->image)}}" alt="Image" class="img-fluid" />
          </a>
          <div class="property-content">
            <div>
                <span class="city d-block mb-3">{{$project->details}}</span>
              <span class="d-block mb-2 text-black-50">{{$project->location->name}}</span>
              <span class="city d-block mb-3">{{$project->name}}</span>
            <a href="{{ route('home') }}"><button class="btn btn-primary">Back</button></a>
            <a href="{{ route('project.property',$project->id) }}"><button class="btn btn-primary">See Property of this project</button></a>
            </div>
          </div>
        </div>
        <!-- .item -->
   
      
    </div>
    
  </div>
  @endsection