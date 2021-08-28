<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>New Vision HTML CSS Template</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" /> <!-- https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans -->
    <link href="{{ asset('theme/css/all.min.css') }}" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="{{ asset('theme/slick/slick.css') }}" rel="stylesheet" /> <!-- https://kenwheeler.github.io/slick/ -->
    <link href="{{ asset('theme/slick/slick-theme.css') }}" rel="stylesheet" />
	<link href="{{ asset('theme/css/bootstrap.min.css') }}" rel="stylesheet" /> <!-- https://getbootstrap.com -->
	<link href="{{ asset('theme/css/templatemo-new-vision.css') }}" rel="stylesheet" />
<!--

New Vision Template

https://templatemo.com/tm-542-new-vision

-->
</head>
<body>
    <!-- Page Header -->
    <div class="container-fluid">
        <div class="tm-site-header">
            <div class="row">
                <div class="col-12 tm-site-header-col">
                    <div class="tm-site-header-left">
                        <i class="far fa-2x fa-eye tm-site-icon"></i>
                        <a href="{{ url('/home') }}"><h1 class="tm-site-name">New Vision</h1></a>
                    </div>
                    <div class="tm-site-header-right tm-menu-container-outer">
                        
                        <!--Navbar-->
                        <nav class="navbar navbar-expand-lg">
                        
                          <!-- Collapse button -->
                          <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                                class="fas fa-bars fa-1x"></i></span></button>
                        
                          <!-- Collapsible content -->
                          <div class="collapse navbar-collapse tm-nav" id="navbarSupportedContent1">
                        
                            <!-- Links -->
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                                <a class="nav-link tm-nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item {{ Request::is('company') ? 'active' : '' }}">
                                <a class="nav-link tm-nav-link" href="{{ url('/company') }}">Our Company</a>
                              </li>
                              <li class="nav-item {{ Request::is('service') ? 'active' : '' }}">
                                <a class="nav-link tm-nav-link" href="{{ url('/service') }}">Services</a>
                              </li>
                              <li class="nav-item {{ Request::is('contact-us') ? 'active' : '' }}">
                                <a class="nav-link tm-nav-link" href="{{ url('/contact-us') }}">Contact</a>
                              </li>
                            </ul>
                            <!-- Links -->
                        
                          </div>
                          <!-- Collapsible content -->
                        
                        </nav>
                        <!--/.Navbar-->
                    </div>
                </div>
            </div>
        </div>
        
        @yield('content')
            
            <footer>
                Copyright &copy; 2020 New Vision 
                
                - Design: <a href="https://templatemo.com" rel="sponsored" target="_parent" title="css templates">TemplateMo</a>
            </footer>
            
        </main>
    </div>
    <script src="{{ asset('theme/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('theme/slick/slick.min.js') }}"></script>
    <script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/js/templatemo-script.js') }}"></script>
    @stack('footer-script')
</body>
</html>