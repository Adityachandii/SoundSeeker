@extends('layouts.mainguest')


@section('content')
<section class="d-flex align-items-center" style="background-color: rgb(255, 255, 255); height: 600px;">
    <div class="container py-5 p-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h3 class="mb-5">Please Sign in</h3>
                        <form action={{route('LoginLogic')}} method="POST">
                        @csrf
                            <div class="form-outline mb-4">
                                <input type="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Email" name="email"/>
                                @error('username')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" name="password"/>
                                @error('username')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <button class="btn btn-warning btn-lg btn-block w-25" type="submit">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
