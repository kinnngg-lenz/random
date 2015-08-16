<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title> Welcome </title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    {{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">--}}
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <img class="drop-sh"alt="Brand" src="/img/logo.svg">
            <h3 class="navbar-right"><a class="header-title-link" href="/">Show Off</a>
            </h3>
            </image>
            <!--sign in form-->
        </div>
        @yield('nav_login_form')
    </div>
</nav>


<div class="container">
@yield('content')
</div>
{{--

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <h4>About Us</h4>
            <ul>
                <li><a href="#AboutUs"> Persons</a></li>
                <li><a href="#AboutUs"> Persons</a></li>
                <li><a href="#AboutUs"> Persons</a></li>
                <li><a href="#AboutUs"> Persons</a></li>
            </ul>


        </div>
        <div class="col-lg-4">
            <h4>Credits</h4>

            <a href="http://www.freepik.com/free-photos-vectors/pen"><img src="img/attrib.svg"></a>
        </div>
    </div>
</div>
--}}


<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>
