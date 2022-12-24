@extends('frontend.master')
@section('content')
    <section class="h-100 h-custom" style="background-color: #005555; padding:40px 0">
        <div class="container py-8 h-10">

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-5">
                    <div class="card rounded-3">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                            alt="Sample photo">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                            <form action="{{ route('reg.post') }}" method="POST" enctype="multipart/form-data"
                                autocomplete="off">
                                @csrf
                                <div class="form-outline mb-2">
                                    <label class="form-label" for="form3Example1q">Name</label>
                                    <input type="text" name="name" id="form3Example1q" class="form-control" required/>
                                </div>

                                <div class="row">
                                    <div class="col-md-16 mb-4">
                                        <div class="form-outline address">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" name="address" class="form-control" id="address" />
                                        </div>

                                        <div class="row">
                                            <div class="col-md-16 mb-4">
                                                <div class="form-group">
                                                    <label for="image" class="mt-3 mb-2">Upload an Image</label>
                                                    <input type="file" class="form-control" id="image" name='image'
                                                        accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-16 mb-4">
                                                <div class="form-group">
                                                    <label for="nid_image">NID</label>
                                                    <input type="file" class="form-control" id="nid_image"
                                                        name='nid_image' accept="image/*,.pdf">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label>Choose An Option</label>
                                            <select name="role" id="" class="form-control">
                                                <option value="seller">Sell a land</option>
                                                <option value="buyer">Buy a land</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-16 mb-4">
                                                <div class="form-outline">
                                                    <label class="email" for="email" aut>Enter your e-mail</label>
                                                    <input type="email" id="email" name="email"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-16 mb-5">
                                                <div class="form-outline address">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        id="password" />
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <button type="submit"
                                                        class="btn btn-success btn-lg mb-3">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
