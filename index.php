<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Webshop</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
            body {
                background-color: #222222;
            }

            .navbar-inverse {
                border-color: transparent;
            }
            .panel {
                background-color: #333;
                border-color: orange;
            }

            .panel-body {
                background-color: #333;
                border-color: transparent;

            }

            .panel-heading {
                border: none;
            }

            .panel-footer {
                background-color: #333;
                border: none;
                color: floralwhite;
                text-align: center;
            }

            .bottomheading {
                background-color: #333;
                color: floralwhite;
                margin-bottom: 60px;
                padding-inline: 5px;
            }

            .btn {
                background-color: #985f0d;
                padding-inline: 15px;
                padding-block: 5px;
                border-radius: 10px;
            }

            .panel-info > .panel-heading {
                background-color: orange;
            }

            .nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
                background-color: orange;
            }

            a { color: orange;}

            .navbar-right {
                background-color: transparent;
                color: floralwhite;
            }

            .dropdown-panel {
                background-color: #f3bc59;
            }

            ul.dropdown-menu {
                background-color: transparent;
                box-shadow: none;
                border: none;
            }

            .loginfooter {
                border-color: transparent;
                background-color: #333333;
            }

            .jumbotron {
                background-color: #333333;
                border: 1px solid orange;
                margin-top: 100px;
            }

            .jumbotron h1 {
                color: orange;
            }

            .jumbotron h2 {
                color: #f3bc59;
            }
        </style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">Webshop</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="products.php"><span class="glyphicon glyphicon-modal-window"></span> Products</a></li>
			</ul>
			<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge" >0</span></a>
					<div class="dropdown-menu" style="width:400px; background-color: transparent; box-shadow: none; border: none;">
						<div class="panel dropdown-panel">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in <?php echo CURRENCY; ?></div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login/Register</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<input type="submit" class="btn btn-warning" value="Login">
										<a href="customer_registration.php?register=1" style="color:white; text-decoration:none;">Create Account Now</a>
									</form>
								</div>
								<div class="panel-footer loginfooter" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="container">
    <div class="jumbotron text-center">
        <h1>WEBSHOP</h1>
        <h2>Camille's PHP Webshop project</h2>
    </div>
</div>


</body>
</html>
















































