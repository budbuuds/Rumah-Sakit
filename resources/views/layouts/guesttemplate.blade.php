<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="shortcut icon" href="{{ url('backend/asset/img/pict/aksitageh.jpeg') }}">
        <meta charset="utf-8">
        <meta name="description" content="Merupakan sebuah platform digital yang menyatukan dan memanggil Relawan untuk ikut ambil bagian dalam gerakan sosial Sumbar Lawan Covid 19.">
        <meta name="author" content="IA UKM-ITB dan Neo-Telemetri UNAND">
        <meta name="keyword" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
          
     
        <!-- start: Css -->
        <link rel="stylesheet" type="text/css" href=" {{ url('backend/asset/css/bootstrap.min.css') }}">

        <!-- Bootstrap CSS File -->
        <link href="{{ url('backend/asset/css/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <!-- Libraries CSS Files -->
        <link href="{{ url('backend/asset/css/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ url('backend/asset/css/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ url('backend/asset/css/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ url('backend/asset/css/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ url('backend/asset/css/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <link href="{{ url('backend/asset/css/style1.css') }}" rel="stylesheet">

        <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="{{ url('backend/asset/css/plugins/font-awesome.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('backend/asset/css/plugins/simple-line-icons.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('backend/asset/css/plugins/datatables.bootstrap.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('backend/asset/css/plugins/animate.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('backend/asset/css/plugins/fullcalendar.min.css') }}"/>
        <link href="{{ url('backend/asset/css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ url('backend/asset/swiper-master/package/css/swiper.min.css') }}"/>
        <!-- end: Css -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif] -->
    </head>
    <body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="{{ url('backend/asset/img/pict/logoaksitageh.png') }}" alt="" class="img-fluid"></a>
        <a href="#intro" class="scrollto"><img src="{{ url('backend/asset/img/pict/logounand.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul> 
          <li><a href="/">BERANDA</a></li>
          <li><a href="donatur">DONATUR</a></li>
          {{-- <li><a href="penyedia">SUPPLIER</a></li> --}}
          <li><a href="kebutuhan">PENYALURAN</a></li>
          <li><a href="about">ABOUT</a></li>
          <li><a href="rumahsakit-admin" class="login">LOG IN</a></li>
          <!-- <li><a href="/#berita">BERITA</a></li> 
          <li><a href="/#donatur">INFO</a></li> 
          <li><a href="/#why-us">DAERAH</a></li> -->
          <!-- <li><a href="view/register.php">Register</a></li>   -->
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
<script src="https://code.highcharts.com/highcharts.js"></script>


  @yield('container')

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">   
          <div class="col-lg-4 col-md-4 social-links"> 
            <a href="https://www.instagram.com/kkntematik_aksitageh/?hl=id" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
            <span>@kkntematik_aksitageh</span>
          </div>
          <div class="col-lg-4 col-md-4 social-links"> 
            <a href="https://www.instagram.com/neotelemetri/?hl=id" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
            <span>@neotelemetri</span>
          </div>
          <div class="col-lg-4 col-md-4 social-links"> 
            <a href="https://www.instagram.com/aksitageh/?hl=id" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
            <span>@aksitageh</span>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright &copy;<strong>2020</strong> Neo Telemetri UNAND x IA UKM-ITB
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{ url('backend/asset/css/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('backend/asset/css/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ url('backend/asset/css/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('backend/asset/css/lib/easing/easing.min.js') }}"></script>
  <script src="{{ url('backend/asset/css/lib/mobile-nav/mobile-nav.js') }}"></script>
  <script src="{{ url('backend/asset/css/lib/wow/wow.min.js') }}"></script>
  <script src="{{ url('backend/asset/css/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ url('backend/asset/css/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ url('backend/asset/css/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ url('backend/asset/css/lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('backend/asset/css/lib/lightbox/js/lightbox.min.js') }}"></script>
  <script src="{{ url('backend/asset/swiper-master/package/js/swiper.min.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ url('backend/asset/js/main1.js') }}"></script>

<!-- start: Javascript -->
<script src="{{ url('backend/asset/js/jquery.min.js')}}"></script>
<script src="{{ url('backend/asset/js/jquery.ui.min.js')}}"></script>
<script src="{{ url('backend/asset/js/bootstrap.min.js')}}"></script>



<script src="{{ url('backend/asset/js/plugins/moment.min.js')}}"></script>
<script src="{{ url('backend/asset/js/plugins/jquery.datatables.min.js')}}"></script>
<script src="{{ url('backend/asset/js/plugins/datatables.bootstrap.min.js')}}"></script>
<script src="{{ url('backend/asset/js/plugins/jquery.nicescroll.js')}}"></script>
<script src="{{ url('backend/asset/js/plugins/Chart.js')}}"></script>



<script src="{{url('backend/asset/js/main.js')}}"></script>
<script type="text/javascript"></script> 
    </body>
</html>
