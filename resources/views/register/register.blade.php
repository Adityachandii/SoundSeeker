@extends('layouts.mainguest')
@section('title', 'Register Your Account')

@section('content')
<div style="height: 804px; background-color: rgb(255, 255, 255);">
    <form action={{route('AddAccount')}} method="POST">
    @csrf
        <section class="h-100">
            <div class="container py-5 p-1">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5">
                                <h3 class="mb-5">Register Form</h3>

                                <div class="form-outline mb-4">
                                    <input type="name" id="typenameX-2" class="form-control form-control-lg" placeholder="Username" name="username"/>
                                    @error('username')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="name" id="typenameX-2" class="form-control form-control-lg" placeholder="Phone" name="phone"/>
                                    @error('phone')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="date" id="typenameX-2" class="form-control form-control-lg" name="dateofbirth"/>
                                    @error('dateofbirth')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Email" name="email"/>
                                    @error('email')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" name="password"/>
                                    @error('password')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="typeConfirmPasswordX-2" class="form-control form-control-lg" placeholder="Confirm Password" name="confirmpassword"/>
                                    @error('confirmpassword')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <button class="btn btn-warning btn-lg btn-block" type="submit">Sign Up Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</div>
@endsection
