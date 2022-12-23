@extends("backend.master")

@section("content")
   

    <div class="container">
        <div class="row my-5">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="col-md-4">
                    <img src="{{ url('/uploads/', $property->image) }}" alt="Image" class="img-fluid" style="height:200px; " />
                    <img src="{{ url('/uploads/', $property->nid_image) }}" alt="Image" class="img-fluid" style="height:200px; " />
                    <img src="{{ url('/uploads/', $property->khotian_image) }}" alt="Image" class="img-fluid" style="height:200px; " />
                    <img src="{{ url('/uploads/', $property->dolil) }}" alt="Image" class="img-fluid" style="height:200px; " />
                    <div class="py-3">
                        <span style="font-weight:bold;">{{ $property->price }} BDT {{-- ({{$data->negotiable}}) --}} </span>
                        <p>{{ $property->details}}</p>
                    </div>
                    <div>

                        <form action ="{{route('backend.property.status.update',$property->id)}}" method="post">
                            @csrf
                            <button class="btn btn-success">
                                Approve
                            </button>
                        </form>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
@endsection