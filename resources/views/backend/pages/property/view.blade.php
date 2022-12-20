@extends("backend.master")

@section("content")
    {{-- @dd($property) --}}

    <div class="container">
        <div class="row my-5">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="col-md-4">
                    <img src="{{ url('/uploads/', $property->image) }}" alt="Image" class="img-fluid" style="height:200px; " />
                    <div class="py-3">
                        <span style="font-weight:bold;">{{ $property->price }} BDT {{-- ({{$data->negotiable}}) --}} </span>
                        <p>{{ $property->details}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
@endsection