<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Merupakan sebuah platform digital yang menyatukan dan memanggil Relawan untuk ikut ambil bagian dalam gerakan sosial Sumbar Lawan Covid 19.">
        <meta name="author" content="IA UKM-ITB dan Neo-Telemetri UNAND">
        <meta name="keyword" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kebutuhan Rumah Sakit</title>
    
        <!-- start: Css -->
        <link rel="stylesheet" type="text/css" href=" <?php echo e(url('backend/asset/css/bootstrap.min.css')); ?>">

        <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('backend/asset/css/plugins/font-awesome.min.css')); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('backend/asset/css/plugins/simple-line-icons.css')); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('backend/asset/css/plugins/datatables.bootstrap.min.css')); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('backend/asset/css/plugins/animate.min.css')); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('backend/asset/css/plugins/fullcalendar.min.css')); ?>"/>
        <link href="<?php echo e(url('backend/asset/css/style.css')); ?>" rel="stylesheet">
        <!-- end: Css -->
 
        <link rel="shortcut icon" href="<?php echo e(url('backend/asset/img/emeral.png')); ?>">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif] -->
    </head>
    <body id="mimin" class="dashboard">
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

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
                <li class="user-name"><span><?php echo e(Auth::user()->name); ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="<?php echo e(url('backend/asset/img/avatar.jpg')); ?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
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
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
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
                        <h3 class="animated fadeInLeft">Data Tables</h3>
                        <p class="animated fadeInDown">
                          Table <span class="fa-angle-right fa"></span> Data Tables
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Rumah Sakit</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                       <tr>
                          <th>Kota / Kabupaten</th>
                          <th>Nama Rumah Sakit</th>
                          <th>Alamat</th>
                          <!-- <th>Contact Person</th> -->
                          <th>Masker N95</th>
                          <th>Masker Surgical</th>
                          <th>Sarung Tangan (gloves)</th>
                          <th>Coverall Jumpsuit (hazmat)</th>
                          <th>Faceshield</th>
                          <th>Kacamata Goggles</th>
                          <th>Boot and Shoe Cover</th>
                          <th>Handsanitizer</th>
                          <th>Desinfektan</th>
                          <th>Multivitamin</th>
                          <th>Kantong Jenazah</th>
                          <th>Skorlet</th>
                        </tr>
                      </thead>
                      <?php $__currentLoopData = $data_rs_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tbody>
                        <tr>
                          <td> <?php echo e($rs -> daerah -> kota); ?> </td>

                          <td> <?php echo e($rs -> nama_rs); ?> </td>

                          <td> <?php echo e($rs -> alamat); ?> </td>
  
                          <!-- <td> <?php echo e($rs -> cp); ?></td> -->
                                                    
                          <td> <?php echo e($rs -> r_masker_n95); ?> </td>
                          
                          <td> <?php echo e($rs -> r_masker_surgical); ?> </td>
                          
                          <td> <?php echo e($rs -> r_sarung_tangan); ?> </td>
                          
                          <td> <?php echo e($rs -> r_coverall_jumpsuit); ?> </td>
                          
                          <td> <?php echo e($rs -> r_faceshield); ?> </td>
                          
                          <td> <?php echo e($rs -> r_kacamata_goggles); ?> </td>
                          
                          <td> <?php echo e($rs -> r_boot_and_shoe_cover); ?> </td>
                          
                          <td> <?php echo e($rs -> r_handsanitizer); ?> </td>
                          
                          <td> <?php echo e($rs -> r_desinfektan); ?> </td>
                          
                          <td> <?php echo e($rs -> r_multivitamin); ?> </td>
                          
                          <td> <?php echo e($rs -> r_kantong_jenazah); ?> </td>
                          
                          <td> <?php echo e($rs -> r_Skorlet); ?> </td>
                          
                        </tr>
                      </tbody>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
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

<!-- start: Javascript -->
<script src="<?php echo e(url('backend/asset/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/asset/js/jquery.ui.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/asset/js/bootstrap.min.js')); ?>"></script>



<!-- plugins -->
<script src="<?php echo e(url('backend/asset/js/plugins/moment.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/asset/js/plugins/jquery.datatables.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/asset/js/plugins/datatables.bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/asset/js/plugins/jquery.nicescroll.js')); ?>"></script>


<!-- custom -->
<script src="<?php echo e(url('backend/asset/js/main.js')); ?>"></script>
<script type="text/javascript">
</script>
<!-- end: Javascript -->
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\RS\RS-Sumbar\resources\views/admin/index.blade.php ENDPATH**/ ?>