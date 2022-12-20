@extends('backend.master')
@section('content')
    <div class="container">
        <h1>Property list</h1>
        <a href="{{ route('backend.property.create') }}"><button class="btn btn-success">Add property +</button></a>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">location</th>
                    <th scope="col">project</th>
                    <th scope="col">Details</th>
                    <th scope="col">Image</th>
                    <th scope="col">NID</th>
                    <th scope="col">Khotian/porcha</th>
                    <th scope="col">Status</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($property as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->location_id }}</td>
                        <td>{{ $data->project_id }}</td>
                        <td>{{ $data->details }}</td>
                        <td><img src="{{ url('/uploads/', $data->image) }}" alt=""></td>
                        <td><img src="{{ url('/uploads/', $data->nid_image) }}" alt=""></td>
                        <td><img src="{{ url('/uploads/', $data->khotian_image) }}" alt=""></td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->price }}</td>
                        <td>
                            <a href="{{route('backend.property.view', $data->id)}}"><button type="button" class="btn btn-success">View</button></a>
                            <a href="{{ route('backend.property.edit', $data->id) }}"><button type="button"
                                    class="btn btn-primary">Edit</button></a>
                            <a href="{{ route('backend.property.delete', $data->id) }}"><button type="button"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete?')">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
