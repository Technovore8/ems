@extends('frontend.master')
@section('content')
    <div class="section section-properties">
        <div class="container mt-9rem">
            <div class="row">

                <div class="property-item mb-30">
                    <a href="{{ url('/uploads/', $property->image) }}" class="img btn-gallery">
                        <img src="{{ url('/uploads/', $property->image) }}" alt="Image" class="img-fluid" />
                    </a>
                    <div class="property-content">
                        <div class="price mb-2"><span>{{ $property->price }}</span></div>
                        <div>
                            <span class="d-block mb-2 text-black-50">{{ $property->location->name }}</span>
                            <span class="d-block mb-2 text-black-50">{{ $property->details }}</span>
                            <span class="city d-block mb-3">{{ $property->name }}</span>
                            <a href="{{ route('home') }}"><button class="btn btn-primary">Back</button></a>
                            <a href="{{ route('frontend.book.create', $property->id) }}"><button class="btn btn-primary">Book
                                    a Visit</button></a>
                        </div>
                    </div>
                </div>
                <!-- .item -->


            </div>

        </div>
    </div>
    <script>
    </script>
@endsection
