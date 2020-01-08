<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">    

    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- bootstrap js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 p-0">
                <div class="row">
                    <div class="jumbotron jumbotron-fluid p-0 m-0" style="max-height: 500px; height: 420px; width: 300px; margin: 0 auto; float: left; border-bottom-right-radius: 100px; background-color: #E5E5E5;">
                        <div class="container">
                            <div class="row">
                                <div class="project-name col-8 p-4" style="height: 100px;">
                                    <p class="font-weight-bold" style="color: #272343; font-size: 16px;">Grab Admin Panel</p>
                                </div>
                                <div class="col-4 p-4" style="height: 100px; display: table;">
                                    <div style="display: table-cell; vertical-align: middle; border-radius: 100px; background-color: rgba(39, 35, 67, 0.25);">
                                        <img src="{{ asset('img/mdi_rocket.png') }}" class="img-fluid d-block mx-auto" width="24" alt="" style="">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-2">
                                <div class="col-4">
                                    <h1 style="color: #2F80ED;">25%</h1>
                                </div>
                                <div class="col-4">
                                    <p class="" style="font-size: 16px; color: #2F80ED;">Progress Application</p>
                                </div>
                            </div>
                            <div class="row">
                                <p class="ml-4 font-weight-bold" style="font-size: 20px; color: #272343;">10 / 40 TASK IS DONE</p>
                            </div>
                            <div class="row pt-2 pr-4 pl-4 pb-4">
                                <div class="col-12">
                                    <p style="font-size: 16px; color: #272343;">Fitur Login dan Register</p>
                                </div>
                                <div class="col-12">    
                                    <p style="font-size: 16px; color: #272343;">Fitur Lupa Password</p>
                                </div>
                                <div class="col-12">
                                    <p style="font-size: 16px; color: #272343;">Fitur Trolli</p>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-1">
                                            <img src="{{ asset('img/blue/info-blue.png') }}" alt="" width="16" style="opacity: 50%;">
                                        </div>
                                        <div class="col-10">
                                            <p class="mt-1" style="font-size: 10px; color: #272343;">Klik See Project untuk melihat lebih detail</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <a class="btn ml-4 pl-4 pr-4 pt-2 pb-2" href="#see" style="background-color: #272343; color: #fff; border-radius: 100px; margin-top: -25px; box-shadow: 2px 4px 8px rgba(39, 35, 67, 0.5);"><img class="mr-2" src="{{ asset('img/white/see-white.png') }}" alt=""> See Projects</a>
                </div>
                <div class="row pl-4 mt-5">
                    <div class="col-12">
                        <h5 class="font-weight-bold">PROGRAMMERS</h5>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="programmers-image row pl-3">
                            <div class="" style="background-color: rgba(47, 128, 237, 0.5); width: 48px; border-radius: 100px;">
                                <img style="margin: 6px;" src="{{ asset('img/user/user1.png') }}" alt="">
                            </div>
                            <div class="ml-2" style="background-color: rgba(242, 153, 74, 0.5); width: 48px; border-radius: 100px;">
                                <img style="margin: 6px;" src="{{ asset('img/user/user2.png') }}" alt="">
                            </div>
                            <div class="ml-2" style="background-color: rgb(155, 81, 224); width: 48px; border-radius: 100px;">
                                <img style="margin: 6px;" src="{{ asset('img/user/user3.png') }}" alt="">
                            </div>
                            <div class="ml-2" style="background-color: rgba(155, 81, 224, 0.5); width: 48px; border-radius: 100px;">
                                <img style="margin: 6px;" src="{{ asset('img/user/user4.png') }}" alt="">
                            </div>
                            <div class="ml-2" style="background-color: rgba(155, 81, 224, 0.5); width: 48px; border-radius: 100px;">
                                <img style="margin: 6px;" src="{{ asset('img/user/user5.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row justify-content-center">
                    <div class="navbar navbar-expand-lg">
                        <ul class="navbar-nav">
                            <li class="nav-item pr-5 pl-5 pt-3 mt-2" style="cursor: pointer;">  
                                @if(Request::url() === route('dashboard'))
                                    <a class="nav-link active p-0" href="{{ route('dashboard') }}"><p>PROJECTS</p></a>
                                @else
                                    <a class="nav-link p-0" href="{{ route('dashboard') }}"><p>PROJECTS</p></a>
                                @endif
                            </li>
                            <li class="nav-item pr-5 pl-5 pt-3 mt-2" style="cursor: pointer;">
                                @if(Request::url() === route('finished'))
                                    <a class="nav-link active p-0" href="{{ route('finished') }}"><p>FINISHED</p> </a>
                                @else
                                    <a class="nav-link p-0" href="{{ route('finished') }}"><p>FINISHED</p> </a>
                                @endif
                            </li>
                            <li class="nav-item pr-5 pl-5 pt-3 mt-2" style="cursor: pointer;">
                                @if(Request::url() === route('settingu'))
                                    <a class="nav-link active p-0" href="{{ route('settingu') }}"><p>SETTINGS</p></a>
                                @else
                                    <a class="nav-link p-0" href="{{ route('settingu') }}"><p>SETTINGS</p></a>
                                @endif
                            </li>
                            <li class="nav-item pr-5 pl-5 pt-3 mt-2" style="cursor: pointer;">
                                @if(Request::url() === route('profileu'))
                                    <a class="nav-link active p-0" href="{{ route('profileu') }}"><p>PROFILE</p></a>
                                @else
                                    <a class="nav-link p-0" href="{{ route('profileu') }}"><p>PROFILE</p></a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="line-nav row justify-content-center">
                    <div style="width: 70%; height: 4px; background-color: #E5E5E5; border-radius: 100px;">
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    <script>
    </script>
    @yield('js')
</body>
</html>