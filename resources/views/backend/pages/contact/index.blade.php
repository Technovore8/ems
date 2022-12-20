@extends('backend.master')
@section('content')

    <body>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Subjectt</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($message as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->subject }}</td>
                        <td>{{ $data->message }}</td>
                        <td>
                            <a href=""><button type="button" class="btn btn-success">View</button></a>
                            <a href="{{ route('message.delete', $data->id) }}"><button type="button"
                                    class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">>Delete</button></a>
                        </td>
                    </tr>
                @endforeach
        </table>
        </tbody>
    @endsection
