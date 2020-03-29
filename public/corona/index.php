<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>RS Sumbar for COVID-19</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">
    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Covid-19
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Table List</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-envelope"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">5 Notifications<b class="caret"></b></p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                            </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href=""><p>Account</p></a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>Dropdown<b class="caret"></b></p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#"><p>Log out</p></a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tabel Induk</h4>
                                <p class="category">Data seluruh item Rumah Sakit Sumbar</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No</th>
                                    	<th>Nama Rumah Sakit</th>
                                    	<th>Alamat</th>
                                    	<th>APD</th>
                                        <th>Reagen RTPCR</th>
                                        <th>Viral Transfer Media</th>
                                        <th>Rapid Diagnostic Test</th>
                                        <th>Nasal Swab</th>
                                        <th>Ventilator</th>
                                    </thead>
                                    <?php
                                        include "koneksi.php";
                                        $sql="select * from rs order by id asc";
                                        $hasil=mysqli_query($kon,$sql);
                                        $no=0;
                                        while ($data = mysqli_fetch_array($hasil)) {
                                            $no++;
                                    ?>
                                    <tbody>
                                        <tr>
                                        	<td><?php echo $no; ?></td>
                                            <td><?php echo $data["nama_rs"]; ?></td>
                                            <td><?php echo $data["Alamat"]; ?></td>
                                            <td><?php echo $data["apd"]; ?></td>
                                            <td><?php echo $data["reagen"]; ?></td>
                                            <td><?php echo $data["viral"]; ?></td>
                                            <td><?php echo $data["rapid"]; ?></td>
                                            <td><?php echo $data["nasal"]; ?></td>
                                            <td><?php echo $data["ventilator"]; ?></td>
                                        </tr>
                                    </tbody>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Table Kebutuhan Rumah Sakit</h4>
                                <p class="category">Data jumlah item rumah sakit yang dibutuhkan</p>
                                <a href="add_kebutuhan.php" class="btn btn-success" role="button">Tambah</a>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>No</th>
                                    	<th>Nama Rumah Sakit</th>
                                    	<th>APD</th>
                                        <th>Reagen RTPCR</th>
                                        <th>Viral Transfer Media</th>
                                        <th>Rapid Diagnostic Test</th>
                                        <th>Nasal Swab</th>
                                        <th>Ventilator</th>
                                        <th>Created at</th>
                                    </thead>
                                    <?php
                                        include "koneksi.php";
                                        $sql="select * from kebutuhan order by id asc";
                                        $hasil=mysqli_query($kon,$sql);
                                        $no=0;
                                        while ($data = mysqli_fetch_array($hasil)) {
                                            $no++;
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data["rs_id"]; ?></td>
                                            <td><?php echo $data["apd"]; ?></td>
                                            <td><?php echo $data["reagen"]; ?></td>
                                            <td><?php echo $data["viral"]; ?></td>
                                            <td><?php echo $data["rapid"]; ?></td>
                                            <td><?php echo $data["nasal"]; ?></td>
                                            <td><?php echo $data["ventilator"]; ?></td>
                                            <td><?php echo $data["created_at"]; ?></td>
                                        </tr>
                                    </tbody>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Table Donasi</h4>
                                <p class="category">Data jumlah donasi item rumah sakit</p>
                                <button type="button" class="btn btn-success">Tambah</button>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>No</th>
                                    	<th>Nama Rumah Sakit</th>
                                    	<th>Nama Donatur</th>
                                    	<th>APD</th>
                                        <th>Reagen RTPCR</th>
                                        <th>Viral Transfer Media</th>
                                        <th>Rapid Diagnostic Test</th>
                                        <th>Nasal Swab</th>
                                        <th>Ventilator</th>
                                        <th>Created at</th>
                                    </thead>
                                    <?php
                                        include "koneksi.php";
                                        $sql="select * from donatur order by id asc";

                                        $hasil=mysqli_query($kon,$sql);
                                        $no=0;
                                        while ($data = mysqli_fetch_array($hasil)) {
                                            $no++;
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data["rs_id"]; ?></td>
                                            <td><?php echo $data["nama_donatur"]; ?></td>
                                            <td><?php echo $data["apd"]; ?></td>
                                            <td><?php echo $data["reagen"]; ?></td>
                                            <td><?php echo $data["viral"]; ?></td>
                                            <td><?php echo $data["rapid"]; ?></td>
                                            <td><?php echo $data["nasal"]; ?></td>
                                            <td><?php echo $data["ventilator"]; ?></td>
                                            <td><?php echo $data["created_at"]; ?></td>
                                        </tr>    
                                    </tbody>
                                    <?php
                                        }
                                    ?>
                                </table>

                            </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Company</a>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </footer>
    </div>
</div>
</body>
    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
</html>