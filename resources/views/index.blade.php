<!DOCTYPE html>
<html lang="en">

  <head>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CVBuilder</title>

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">


  </head>

  <body>

    <!-- Navigation -->
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        CVBuilder
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">


                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())


                            <li><a href="{{ route('login') }}">Login</a></li>

                            <li><a href="{{ route('register') }}">Register</a></li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Header -->
    <header class="intro-header">
      <div class="container">
        <div class="intro-message">
          <h1>Want To Build Professional CV ?? </h1>
          <h3>Here You can also find professionals, candidates, skilled peoples </h3>
          <hr class="intro-divider">
          <ul class="list-inline intro-social-buttons">
            <li class="list-inline-item">
              <a href="find" class="btn btn-secondary btn-lg">
                <i class="fa fa-search fa-fw"></i>
                <span class="network-name">Find</span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="buildcv" class="btn btn-secondary btn-lg">
                <i class="fa fa-address-card fa-fw"></i>
                <span class="network-name">Build</span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="tips" class="btn btn-secondary btn-lg">
                <i class="fa fa-address-card fa-fw"></i>
                <span class="network-name">Tips</span>
              </a>
            </li>
      
          </ul>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <section class="content-section-a">

      <div class="container">
        <div class="row">
          <div class="col-lg-5 ml-auto">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">Build your CV according to your profession</h2>
            <p class="lead">CVBuilder provides different resume tamplate to export as pdf so that you can match your resume with your qualifications, experience etc</p>
          </div>
          <div class="col-lg-5 mr-auto">
            <img class="img-fluid" src="img/dog.png" alt="">
          </div>
        </div>

      </div>
      <!-- /.container -->
    </section>

    <section class="content-section-b">

      <div class="container">

        <div class="row">
          <div class="col-lg-5 mr-auto order-lg-2">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">Add your unique skills to your CV</h2>
            <p class="lead">CV biulder helps you create a memorable resume or CV that shows who you are both as a person and as a professional</p>
          </div>
          <div class="col-lg-5 ml-auto order-lg-1">
            <img class="img-fluid" src="img/ipad.png" alt="">
          </div>
        </div>

      </div>
      <!-- /.container -->

    </section>
    <!-- /.content-section-b -->

    <section class="content-section-a">

      <div class="container">

        <div class="row">
          <div class="col-lg-5 ml-auto">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">Let corporate Companies and other people find u</h2>
            <p class="lead"> CVBuilder giving you the opportunity to show yourself as a skilled person in the country so that companies can hire you.</p>
          </div>
          <div class="col-lg-5 mr-auto ">
            <img class="img-fluid" src="img/phones.png" alt="akhne akta photo thakar kotha , et nai tai show kortesena">
          </div>
        </div>

      </div>
      <!-- /.container -->

    </section>
    <!-- /.content-section-a -->

    <aside class="banner">

      <div class="container">

        <div class="row">
          <div class="col-lg-6 my-auto">
            <h2>CVBuilder</h2>
          </div>
          <div class="col-lg-6 my-auto">
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="/" class="btn btn-secondary btn-lg">
                  <i class="fa fa-home fa-fw"></i>
                  <span class="network-name">Home</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="find" class="btn btn-secondary btn-lg">
                  <i class="fa fa-search fa-fw"></i>
                  <span class="network-name">Find Skilled People</span>
                </a>
              </li>
              
            </ul>
          </div>
        </div>

      </div>
      <!-- /.container -->

    </aside>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="home">Home</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="about">About</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="cv">Build CV</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#contact">Contact</a>
          </li>
        </ul>
        <p class="copyright text-muted small">Copyright &copy; CVBuilder team, CSE SUST`14 BATCH 2017. All Rights Reserved</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
