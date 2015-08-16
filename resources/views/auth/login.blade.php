<!-- resources/views/auth/login.blade.php -->
@extends('welcome.layout')

@section('content')
    <div class="col-lg-5">
        <h3 class="white-text"> Log In </h3>
        <form>
            <div class="form-group">

                <label for="inputEmail" class="white-text">Username</label>

                <input type="email" class="form-control" id="inputEmail" placeholder="Email">

            </div>

            <div class="form-group">

                <label for="inputPassword" class="white-text">Password</label>

                <input type="password" class="form-control" id="inputPassword" placeholder="Password">

            </div>
            <button type="submit" class="btn btn-primary">Login</button>
    </div>

    @endsection