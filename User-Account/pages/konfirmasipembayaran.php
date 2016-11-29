<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PERSIJA | CPANEL - USER</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="../../img/persija/logo.png">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="../../index.php"><img src="../../img/persija/logo.png" width="40" height="40"> PERSIJA | USER</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
                
				<?php 
					if (empty($_SESSION['status'])){
					echo '<ul class="nav navbar-nav navbar-right">';
					echo '<li class="dropdown">';
						echo '<a class="dropdown-toggle" href="#" data-toggle="dropdown">';
						echo '<span class="glyphicon glyphicon-user"></span> Sign In &#124; Join<strong class="caret"></strong></a>';
						echo '<div class="dropdown-menu" style="padding: 15px; padding-bottom: 20px;">';
							echo '<form method="POST" action="login.php" accept-charset="UTF-8">';
								echo '<input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="user" required>';
								echo '<input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="pass" required>';
								echo '<a href="user/ForgetPassword.php"><u><i>forget password ?</a></i></u><br>';
								echo '<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">';
								echo '<label class="string optional" for="user_remember_me"><font color="orange"> Remember me</font></label>';
								echo '<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">';
								echo "</form>";
								echo "<hr>";
								echo '<label style="text-align:center;margin-top:5px"><font color="grey">New to OKK</font></label><br>';
                               
							echo '<a href="user/regis-Akun.php"><input class="btn btn-default btn-block" type="button" id="sign-in-google" value="SIGN UP"></a>';
							
						echo "</div>";
					echo "</li>";
					echo "</ul>";
					}
					else if ($_SESSION['status'] == "user"){
					echo '<ul class="nav navbar-nav navbar-right">';
					echo '<li class="dropdown">';
						echo '<a class="dropdown-toggle" href="#" data-toggle="dropdown">';
						echo '<span class="glyphicon glyphicon-user"></span> PROFIL<strong class="caret"></strong></a>';
						echo '<div class="dropdown-menu" style="padding: 15px; padding-bottom: 20px;">';
						echo '<a href ="User-Account/pages/indexuserhomepage.php">Profil</a><br><hr>';
						echo '<a href="../../logout.php">Sign Out</a>';
						echo "</div>";
					echo "</li>";
					echo "</ul>";
					}
					else if ($_SESSION['status']== "admin"){
					echo '<ul class="nav navbar-nav navbar-right">';
					echo '<li class="dropdown">';
						echo '<a class="dropdown-toggle" href="#" data-toggle="dropdown">';
						echo '<span class="glyphicon glyphicon-user"></span> PROFIL<strong class="caret"></strong></a>';
						echo '<div class="dropdown-menu" style="padding: 15px; padding-bottom: 20px;">';
						echo '<a href = "Admin/index.html">Profil</a><br><hr>';
						echo '<a href="../../logout.php">Sign Out</a>';
						echo "</div>";
					echo "</li>";
					echo "</ul>";
					}
					?>
					
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="indexuserhomepage.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="daftaracara.php"><i class="fa fa-table fa-fw"></i> Daftar Acara</a>
                        </li>

                        <li>
							<a href="konfirmasipembayaran.php"><i class="fa fa-search"></i> Konfirmasi</a>
						</li>
                        <li>
                            <a href="../../user/CreatePost.php"><i class="fa fa-table fa-fw"></i>Thread</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Konfirmasi Pembayaran</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Konfirmasi Pembayaran
                        </div>
                        <!-- /.panel-heading -->
                        <div class="container">
						<br>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<form class="form-horizontal" role="form" action="proses.php" method="POST">
				<div class="form-group">
                     <label for="inputNama3" class="col-sm-2 control-label">Kode Tiket</label>
                    <div class="col-sm-8">
                        <input type="text" name="kode" class="form-control" id="inputNama3" placeholder="Kode Tiket">
                    </div>
                </div>
                <div class="form-group">
					 <label for="inputNama3" class="col-sm-2 control-label">Atas Nama</label>
					<div class="col-sm-8">
						<input type="text" name="nama" class="form-control" id="inputNama3" placeholder="Atas Nama">
					</div>
				</div>
				<div class="form-group">
					 <label for="inputTanggal3" class="col-sm-2 control-label">Tanggal Transfer</label>
					<div class="col-sm-8">
						<input type="date" name="tanggal" class="form-control" id="inputTanggal3"  placeholder="Tanggal Transfer">
					</div>
				</div>
				<div class="form-group">
					 <label for="inputJumlah3" class="col-sm-2 control-label">Jumlah</label>
					<div class="col-sm-8">
						<input type="jumlah" name="jumlah" class="form-control" id="inputJumlah3"  placeholder="Jumlah">
					</div>
				</div>
				
				<div class="form-group">
					 <label for="inputRek3" class="col-sm-2 control-label">No.Rekening</label>
					<div class="col-sm-8">
						<input type="rek" name="norek" class="form-control" id="inputRek3"  placeholder="No. Rekening">
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 <button type="submit" class="btn btn-default">Validate</button>
						 <button type="submit" class="btn btn-default">Cancel</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
