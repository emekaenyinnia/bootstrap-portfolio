<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/app.css')}}" rel="stylesheet" />
        <style>
            .active {
                color: red;
            }
        </style>
    </head>
    <body id="page-top">
    
        <!-- Navigation-->
        @include('components.nav')

        <!-- Masthead-->
      @include('components.header')

        <!-- Services-->

        @yield('services')


        <!-- Portfolio Grid-->
  
@yield('portfolio')

        <!-- About-->
        @yield('about');
        
        <!-- Team-->

        
  @yield('team')
        <!-- Contact-->
  

        @yield('contact')
        
        <!-- Footer-->
    
@include('components.footer')

        <!-- Portfolio Modals-->

        <!-- Portfolio item 1 modal popup-->
@yield('profolio-add')
        <!-- Bootstrap core JS-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <!-- <script src="js/scripts.js"></script> -->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

