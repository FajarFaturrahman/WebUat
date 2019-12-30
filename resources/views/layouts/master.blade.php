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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

  <div class="wrapper d-flex align-items-stretch">
  
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3>User Acceptance Test</h3>
        <strong>UAT</strong>
      </div>

      <ul class="list-unstyled components">
        <li class="active mt-4">
          <a href="#home">
            <img src="{{ asset('img/mdi_home.png') }}" alt="">
            Home
          </a>
        </li>
        
        <li class="mt-4">
          <a href="#projects">
            <img src="{{ asset('img/mdi_rocket.png') }}" alt="">
            Projects
          </a>
        </li>

        <li class="mt-4">
          <a href="#history">
            <img src="{{ asset('img/mdi_history.png') }}" alt="">
            Finished Projects
          </a>
        </li>

        <li class="mt-4">
          <a href="#user">
            <img src="{{ asset('img/mdi_account.png') }}" alt="">
            Users
          </a>
        </li>

        <li class="mt-4">
          <a href="#setting">
            <img src="{{ asset('img/mdi_settings.png') }}" alt="">
            Setting
          </a>
        </li>

        <hr>

        <hr>


        <li class="mt-4">
          <a href="#logout">
            <img src="{{ asset('img/mdi_logout.png') }}" alt="">
            logout
          </a>
        </li>
      </ul>
    </nav>
     
    <div id="content" class="col-10">
    <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fa fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
      @yield('content')
    </div>
  
  </div>
</body>
</html>

<script>
  $(document).ready(function () {

  $('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

});
</script>