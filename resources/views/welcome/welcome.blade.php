@extends('welcome.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div id="user_carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#user_carousel" data-slide-to="0"></li>
                        <li data-target="#user_carousel" data-slide-to="1"></li>
                        <li data-target="#user_carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/i1.svg" class="carimage">
                            <h3 class="car-text">Promote yourself</h3>
                            <hr>
                            <h4>Start showing your talents and build audience</h4>
                        </div>
                        <div class="item">
                            <img src="img/i5.svg" class="carimage">
                            <h3 class="car-text">Promote yourself</h3>
                            <hr>
                            <h4>Start showing your talents and build audience</h4>
                        </div>
                        <div class="item">
                            <h2 class="car-text">Promote yourself</h2>
                            <hr>
                            <h3>Start showing your talents and build audience</h3>
                        </div>

                    </div>

                </div>
            </div>


            <div class="col-lg-3">
                <h3 class="white-text"> New Here! Sign Up </h3>
                <form>
                    <div class="form-group">

                        <label for="inputEmail" class="white-text">Email</label>

                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">

                    </div>

                    <div class="form-group">

                        <label for="inputPassword" class="white-text">Password</label>

                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">

                    </div>






                    <div class="form-group">

                        <label for="inputEmail">Email</label>

                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">

                    </div>
                    <div class="form-group">

                        <label for="inputEmail">Email</label>

                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">

                    </div>
                    <div class="form-group">

                        <label for="inputEmail">Email</label>

                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">

                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>


                    <br>
                    <h3>Or SignUp with</h3>

                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default _cbc-f"> Facebook
                                <i class="fa fa-facebook-official"></i>

                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default _cbc-g">Google+
                                <i class="fa fa-google-plus"></i>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default _cbc-t">Twitter
                                <i class="fa fa-twitter"></i>
                            </button>
                        </div>
                    </div>
                </form><br>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                        <span class="sr-only">45% Complete</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
@endsection

@section('nav_login_form')
    <form class="navbar-form navbar-right" role="search">
        <div class="forgm-group">
            <input type="text" class="form-control" placeholder="Username/email">
            <input type="password" class="form-control" placeholder="Password">
            <button type="button" class="btn btn-success navbar-btn">Sign in</button>
        </div>
    </form>
@endsection