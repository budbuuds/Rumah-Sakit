<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Merupakan sebuah platform digital yang menyatukan dan memanggil Relawan untuk ikut ambil bagian dalam gerakan sosial Sumbar Lawan Covid 19.">
        <meta name="author" content="IA UKM-ITB dan Neo-Telemetri UNAND">
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
        <!-- new plugin -->
        <link rel="stylesheet" type="text/css" href="{{ url('backend/asset/select2css/select2.min.css') }}"/>
        <!-- end new plugin -->
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
                        <li><a href="donasinya-admin">Data Donasi Kebutuhan</a></li>
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
                  @if(session('sukses'))
                    <div class="alert alert-success">
                      <strong>Sukses!</strong> Data berhasil ditambahkan.
                    </div>
                  @endif
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Penyaluran Donasi Kebutuhan</h3>
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
                            <th>Tanggal</th>
                            <th>Barang Donasi</th>
                            <th>Bukti Pemberian</th>
                            <th>Donatur</th>
                            <th>Tujuan</th>
                            <th>Option</th>
                        </tr>
                      </thead>
                      @foreach($data_donasinya as $donasinya)
                      <tbody>
                        <tr>
                            <td> {{$donasinya -> created_at}} </td>
                            <td> {{$donasinya -> barangnya}} </td>
                            <td> <img src="{{asset('images/'.$donasinya->file_bukti)}}" alt="file_bukti" width="150px" height="100px"> </td>
                            <!-- <td> <img width="150px" src="{{ url('/file_gambar/'.$donasinya->file_bukti) }}"> </td> -->
                            <td> {{$donasinya -> donaturnya}} </td>
                            <td> {{$donasinya -> rs -> nama_rs}} </td>
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
                        <li><a href="donasinya-admin">Data Donasi Kebutuhan</a></li>
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
    <form action="/donasinya-admin/create" method="POST" enctype="multipart/form-data">
    <!-- <form action="/lensamasuk/store" method="POST"> -->
        {{csrf_field()}}
<!-- <div class="form-group">
    <label for="exampleFormControlSelect1">Rumah Sakit Tujuan</label>
    <select class="form-control m-bot15" name="rs_id">

      @foreach ($rs_array as $array)
        <option value="{{$array->id}}">{{$array->nama_rs}}</option>
      @endforeach

    </select>
  </div> -->

  <div class="form-group">
    <label for="exampleFormControlSelect1" >Rumah Sakit</label>
    <select class="select2" name="rs_1_id" multiple="multiple" style="width: 100%">

      @foreach ($rs_array as $array)
        <option value="{{$array->id}}">{{$array->nama_rs}}</option>
      @endforeach

    </select>
  </div>

  <div>
    <label for="exampleFormControlTextarea1">Tanggal Sampai</label>
    <input name="tanggal" class="form-control" type="date" placeholder="Default input">
  </div>
  <div>
    <label for="exampleFormControlTextarea1">Nama Donatur</label>
    <input name="donaturnya" class="form-control" type="text" placeholder="Default input">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Rumah Sakit Tujuan</label>
    <select name="barangnya" class="form-control" id="exampleFormControlSelect1">
        <option value="Masker N95">Masker N95</option>
        <option value="Masker Surgical">Masker Surgical</option>
        <option value="Sarung Tangan">Sarung Tangan</option>
        <option value="Coverall Jumpsuit">Coverall Jumpsuit</option>
        <option value="Faceshield">Faceshield</option>
        <option value="Kacamata Goggles">Kacamata Goggles</option>
        <option value="Boot and Shoe Cover">Boot and Shoe Cover</option>
        <option value="Handsanitizer">Handsanitizer</option>
        <option value="Desinfektan">Desinfektan</option>
        <option value="Multivitamin">Multivitamin</option>
        <option value="Kantong Jenazah">Kantong Jenazah</option>
        <option value="Skorlet">Skorlet</option>
        </select>
  </div>
  <div>
    <label for="exampleFormControlTextarea1">Bukti Donasi</label>
    <input name="file_bukti" class="form-control" type="file" required>
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
<script src="{{ url('backend/asset/select2js/select2.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
          placeholder: 'Search..',
          tags : true
        });
    });
</script>


<!-- custom -->
<script src="{{url('backend/asset/js/main.js')}}"></script>
<script type="text/javascript">
</script>
<!-- end: Javascript -->
    </body>
</html>
