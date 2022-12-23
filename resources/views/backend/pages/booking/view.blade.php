@extends('backend.master')
@section('content')
    <div class="section section-properties">
        <div class="container mt-9rem">
            <div class="row">

                <div class="property-item mb-30">
                    {{-- @dd($booking) --}}
                    <a href="{{ url('/uploads/', $booking->image) }}" class="img btn-gallery">
                        <img src="{{ url('/uploads/', $booking->image) }}" alt="Image" class="img-fluid" />
                    </a>
                    <a href="{{ url('/uploads/', $booking->nid_image) }}" class="img btn-gallery">
                        <img src="{{ url('/uploads/', $booking->nid_image) }}" alt="Image" class="img-fluid" />
                    </a>
                    <a href="{{ url('/uploads/', $booking->image) }}" class="img btn-gallery">
                        <img src="{{ url('/uploads/', $booking->image) }}" alt="Image" class="img-fluid" />
                    </a>

                    <div class="property-content">
                        <div class="price mb-2"><span>{{ $booking->price }}</span></div>
                        <div>
                            <span class="d-block mb-2 text-black-50">{{ $booking->property->name }}</span>
                            <span class="d-block mb-2 text-black-50">{{ $booking->property->details }}</span>
                            <span class="city d-block mb-3">{{ $booking->name }}</span>
                            <a href="{{ route('home') }}">
                            <button class="btn btn-primary">Back</button></a>
                            <a href="{{ route('backend.booking.view', $booking->id) }}">
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
