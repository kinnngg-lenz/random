<!-- resources/views/auth/login.blade.php -->
@extends('welcome.layout')

@section('content')
    <div class="col-lg-5">
        <h3 class="white-text"> Forgot your password? Reset It </h3>
        <form>
            <div class="form-group">

                <label for="inputEmail" class="white-text">Email</label>

                <input type="email" class="form-control" id="inputEmail" placeholder="Email">

            </div>

            <button type="submit" class="btn btn-primary">Send reset link</button>
    </div>

@endsection