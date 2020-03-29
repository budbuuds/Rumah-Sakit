<?php

$host="localhost";
$user="root";
$password="";
$db="rumah_sakit";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Miminium Admin Template v.1">
        <meta name="author" content="Isna Nur Azis">
        <meta name="keyword" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kebutuhan Rumah Sakit</title>
    
        <!-- start: Css -->
        <link rel="stylesheet" type="text/css" href=" {{ url('backend/asset/css/bootstrap.min.css') }}">

        <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="{{ url('backend/asset/css/plugins/font-awesome.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('backend/asset/css/plugins/simple-line-icons.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('backend/asset/css/plugins/datatables.bootstrap.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('backend/asset/css/plugins/animate.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('backend/asset/css/plugins/fullcalendar.min.css') }}"/>
        <link href="{{ url('backend/asset/css/style.css') }}" rel="stylesheet">
        <!-- end: Css -->

        <link rel="shortcut icon" href="{{ url('backend/asset/img/emeral.png') }}">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif] -->
    </head>
    <body id="mimin" class="dashboard">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.blade.php" class="navbar-brand"> 
                 <b>ADMIN</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>{{ Auth::user()->name }}</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="{{ url('backend/asset/img/avatar.jpg') }}" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <!-- <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li> -->
                     <li class="more">
                      <ul>
                        <!-- <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li> -->
                        <li><a href=""><span class="fa fa-power-off "></span>  Log out</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <!-- <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li> -->
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
          <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-bar-chart"></span> Info Data  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="rumahsakit-admin">Data Rumah Sakit</a></li>
                        <li><a href="kebutuhan-admin">Data Input Kebutuhan</a></li>
                        <li><a href="donatur-admin">Data Input Donatur</a></li>
                        <li><a href="penyedia-admin">Data Input Penyedia</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>
            </div>
          <!-- end: Left Menu -->

          <!-- start: Content -->
          <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Input Kebutuhan</h3>
                         <!-- Button trigger modal -->
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Tambahkan
                            </button>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Tables</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nama Rumah Sakit</th>
                          <th>APD</th>
                          <th>Reagen RTPCR</th>
                          <th>Viral Transfer Media</th>
                          <th>Rapid Diagnostic Test</th>
                          <th>Nasal Swab</th>
                          <th>Ventilator</th>
                          <th>Tanggal</th>
                        </tr>
                      </thead>
                      @foreach($data_kebutuhan as $kebutuhan)
                      <tbody>
                        <tr>
                          <td> {{$kebutuhan -> rs -> nama_rs}} </td>
                          <td> {{$kebutuhan -> apd}} </td>
                          <td> {{$kebutuhan -> reagen}} </td>
                          <td> {{$kebutuhan -> viral}} </td>
                          <td> {{$kebutuhan -> rapid}} </td>
                          <td> {{$kebutuhan -> nasal}} </td>
                          <td> {{$kebutuhan -> ventilator}} </td>
                          <td> {{$kebutuhan -> created_at}}</td>
                        </tr>
                      </tbody>
                      @endforeach
                        </table>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->

    
          
          
      </div>

      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-bar-chart"></span>Info Data
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="rumahsakit-admin">Data Rumah Sakit</a></li>
                        <li><a href="kebutuhan-admin">Data Input Kebutuhan</a></li>
                        <li><a href="donatur-admin">Data Input Donatur</a></li>
                        <li><a href="penyedia-admin">Data Input Penyedia</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                  </ul>
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <div class="modal-body">
    <form action="/kebutuhan-admin/create" method="POST">
    <!-- <form action="/lensamasuk/store" method="POST"> -->
        {{csrf_field()}}
<div class="form-group">
    <label for="exampleFormControlSelect1">Rumah Sakit</label>
    <select name="rs_id" class="form-control" id="exampleFormControlSelect1">
      <option value="1">RSU Painan</option>
      <option value="2">RSU Muara Labuh</option>
      <option value="3">RSU Prof Dr M A Hanafi</option>
      <option value="4">RSU Pariaman</option>
      <option value="5">RSU Lubuk Basung</option>
      <option value="6">RSU Suliki</option>
      <option value="7">RSU Lubuk Sikaping</option>
      <option value="8">RS Islam Ibnu Sina</option>
      <option value="9">RSU Dr M Jamil</option>
      <option value="10">RS Dr Reksodiwiryo</option>
      <option value="11">RS Yos Sudarso</option>
      <option value="12">RSB An-Nisa</option>
      <option value="13">RS Islam Ibnu Sina</option>
      <option value="14">RS Restu Ibu</option>
      <option value="15">RS Aisyiah Muhammadiyah</option>
      <option value="16">RS Polda Sumbar</option>
      <option value="17">RSB Sari</option>
      <option value="18">RS Jiwa Puti Bungsu</option>
      <option value="19">RSB Bunda Padang</option>
      <option value="20">RS Selaguri</option>
      <option value="21">RS Mata Oculer</option>
      <option value="22">RS PT Semen Padang</option>
      <option value="23">RS Jiwa Padang</option>
      <option value="24">RS Jantung Sumbar</option>
      <option value="25">RS Mata Perintis</option>
      <option value="26">RSB Lenggogeni</option>
      <option value="27">RS Mata Sitawa</option>
      <option value="28">RSK Bedah Ropanasuri</option>
      <option value="29">RS Selasih</option>
      <option value="30">RSU Padang</option>
      <option value="31">RSB Ananda</option>
      <option value="32">RSU Asri</option>
      <option value="33">RSU Solok</option>
      <option value="34">RSU Sawah Lunto</option>
      <option value="35">RSU Sungai Dareh</option>
      <option value="36">RSU Padang Panjang</option>
      <option value="37">RS Ibnu Sina Pd Panjang</option>
      <option value="38">RSU Dr Achmad Mochtar</option>
      <option value="39">RS Rem 032 Bukittinggi</option>
      <option value="40">RSU Pusat Bukittinggi</option>
      <option value="41">RS Ibnu Sina Bukittinggi</option>
      <option value="42">RSU Madina</option>
      <option value="43">RSU Dr Adnaan WD</option>
      <option value="44">RSU Ibnu Sina Payakumbuh</option>
      
    </select>
  </div>
  <div>
    <label for="exampleFormControlTextarea1">APD</label>
    <input name="apd" class="form-control" type="number" placeholder="Default input">
  </div>
  <div>
    <label for="exampleFormControlTextarea1">Reagen RTPCR</label>
    <input name="reagen" class="form-control" type="number" placeholder="Default input">
  </div><div>
    <label for="exampleFormControlTextarea1">Viral Transfer Media</label>
    <input name="viral" class="form-control" type="number" placeholder="Default input">
  </div><div>
    <label for="exampleFormControlTextarea1">Rapid Diagnostic Test</label>
    <input name="rapid" class="form-control" type="number" placeholder="Default input">
  </div><div>
    <label for="exampleFormControlTextarea1">Nasal Swab</label>
    <input name="nasal" class="form-control" type="number" placeholder="Default input">
  </div><div>
    <label for="exampleFormControlTextarea1">Ventilator</label>
    <input name="ventilator" class="form-control" type="number" placeholder="Default input">
  </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input class="btn btn-primary" type="submit" value="Submit">
</form>
        </div>
        </div>
    </div>
    </div>

<!-- start: Javascript -->
<script src="{{ url('backend/asset/js/jquery.min.js')}}"></script>
<script src="{{ url('backend/asset/js/jquery.ui.min.js')}}"></script>
<script src="{{ url('backend/asset/js/bootstrap.min.js')}}"></script>



<!-- plugins -->
<script src="{{ url('backend/asset/js/plugins/moment.min.js')}}"></script>
<script src="{{ url('backend/asset/js/plugins/jquery.datatables.min.js')}}"></script>
<script src="{{ url('backend/asset/js/plugins/datatables.bootstrap.min.js')}}"></script>
<script src="{{ url('backend/asset/js/plugins/jquery.nicescroll.js')}}"></script>


<!-- custom -->
<script src="{{url('backend/asset/js/main.js')}}"></script>
<script type="text/javascript">
</script>
<!-- end: Javascript -->
    </body>
</html>
