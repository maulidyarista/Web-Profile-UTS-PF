<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile Website</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light">
    <!--Navbar start-->
    <nav class="navbar navbar-light fixed-top shadow-sm" style="background: #F3ECDA;">
        <div class="container-lg">
          <a class="navbar-brand fw-bold fs-4" style="color: #FFCBA4;" href="#">M.R.Y</a>
          <div class="dropdown">
            <button class="btn btn-secondary px-3" style="background-color: #FFCBA4;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-bars"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#home">Home</a></li>
              <li><a class="dropdown-item" href="#about">About</a></li>
              <li><a class="dropdown-item" href="#services">Services</a></li>
              <li><a class="dropdown-item" href="#portofolio">Portofolio</a></li>
              <li><a class="dropdown-item" href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
    </nav>
    <!--Navbar end-->

    @yield('content')
    
    <!--Footer section start-->
    <footer class="footer border-top py-4" style="background-color:#F3ECDA;">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12">
                    <p class="m-0 text-center" style="color: #94553D;">&copy; 2021 Maulidya Rista Yuniar</p>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer section end-->

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>