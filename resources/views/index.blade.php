<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Portfolio</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" data-value="home" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-4">
            <li class="nav-item ">
                <a class="nav-link" data-value="about" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-value="projects" href="#">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-value="contact-form" href="#">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<header class="header" id ="home">
    <div class="overlay"></div>
    <div class="container">
        <div class="description">
            <h3>
                Hello!!! Welcome To My Website :)
            </h3>
            <p>
                You can find everything about me here!!!</p>
        </div>

    </div>
</header>

<div class="about" id="about">
    <div class="row about">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <img  src="{{asset('images/its_me.jpg')}}" class="img-fluid">
            <span class="text-justify">Engineer - Programmer</span>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 desc">

            <h3> Anatolii Trofimov </h3>
            <p>
                ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
</div>

<div class="projects" id="projects">
    <h1 class="text-center">Projects</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-16 col-sm-16 text-center">
                <h3>Address</h3>
                <a class="link" href="http://165.22.206.220/address/">
                    <img src="{{asset('images/address.jpg')}}" class="img-fluid my-img">
                </a>
            </div>
            <div class="col-lg-5 col-md-16 col-sm-16 text-center">
                <h3>Gallery</h3>
                <a class="link" href="http://165.22.206.220/gallery/">
                    <img src="{{asset('images/gallery.jpg')}}" class="img-fluid my-img">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Contact form -->
<div class="contact-form" id="contact-form">
    <div class="container">
        <form>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h1>Get in Touch</h1>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 right">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" name="email">
                    </div>
                    <div class="form-group">
         <textarea class="form-control form-control-lg">
         </textarea>
                    </div>
                    <input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" src='{{asset('js/app.js')}}'></script>
<script type="text/javascript" src='{{asset('js/main.js')}}'></script>
</body>

<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4 justify-content-center">

    <!-- Footer Elements -->
    <div class="container" >

        <!-- Social buttons -->

        <div class="social github ">
            <a href="#" target="_blank"><i class="fa fa-github fa-2x"></i></a>
        </div>
        <div class="social vk" style="margin-top: 15px">
            <a href="#" target="_blank"><i class="fa fa-vk fa-2x"></i></a>
        </div>
        <div class="social telegram">
            <a href="#" target="_blank"><i class="fa fa-paper-plane fa-2x"></i></a>
        </div>
        <!-- Social buttons -->
        <br>

    </div>
    <div class="container">
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
    </div>
</footer>
<!-- Footer -->

</html>