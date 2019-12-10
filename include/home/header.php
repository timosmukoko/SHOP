<?php include('db.php'); ?>
<?php session_start(); ?>

<?php //print_r($_SESSION['cart']); ?>

<?php
    $jim = new Data();
    $countproduct = $jim->countproduct();
    
    $cat = $jim->getcategory();
    class Data {
        function countproduct(){
            $count = 0;
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart']:array();
            foreach($cart as $row):
                if($row['qty']!=0){
                    $count = $count + 1;
                }
            endforeach;
            
            return $count;
        }
        function getcategory(){
            $result = mysql_query("SELECT * FROM category");
            return $result;
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TMS Online Shop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       

</head><!--/head-->

<body>
<header id="header"><!--header-->
		<div class="header_top" style="background-color: black; color:white;"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>(061) 000 000</a></li>
								<li><a href="https://office365.student.lit.ie/adfs/ls/?client-request-id=d71fa9b9-7fc7-468f-bf74-cf91b5a63a48&username=&wa=wsignin1.0&wtrealm=urn%3afederation%3aMicrosoftOnline&wctx=estsredirect%3d2%26estsrequest%3drQIIAdNiNtQztFIxgAAjXRCpa5CWZqibnApiIYEiIS6BnSvlrx-v73fbX3J-4tZlVh6zGPmKS0pTUvNK9HIyS_QyU1cxKmWUlBQUW-nr55eW5OTnZ-vlp6VlJqcam5nqJefn6ueXJ-rvYGS8wMi4isnczNjMyMLEzMjUwNjCzMzYwMxSL9nUJDHZ3MhENzXZzFQXKGeum5icZKFrYGFplmJhYGFuaGJ8i4nf37G0JMMIROQXZValfmLiTMsvyo0vyC8umcUsBbbFvig1MSfXFs19zET5dRMzG9Cxufl5p5jZ8gtS8zJTLrAwvmLhMWC24uDgEmCQYFBg-MHCuIgVGCbaH857Wa576LdgrtX7Y8cFGE6x6vu4GfibGma6-aUEe2Q7WoYEBHmkpJpklJWkF5TmRBV6mJUFhQd665tneOTbmlgZTmBjnMDGtouTiKADAA2" target="_black"><i class="fa fa-envelope"></i> k00203438@Student.lit.ie</a></li>
							</ul>
						</div>
					</div>
					<div class ="col-sm-6">
						<ul class="nav navbar-nav collapse navbar-collapse">
							    <li><a href="login.html">Admin Login</a></li>
								<li><a href="userLogin.php">User Login</a></li>
								<li><a href="register.php">Register</a></li>								
						</ul>
					
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">							
								<li><a href="https://www.facebook.com/TMS-Online-Shop-121109778436650/ " target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="logo pull-left">
							<center><a href="index.php"><img src="images/home/tmsbanner.png" alt="Logo" class="img-responsive"/></a></center>
						</div>
		
					</div>
					
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom navbar navbar-inverse"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header navbar-default">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>
                                <li class="dropdown"><a href="#">Products Category<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <?php
                                            $cat = $jim->getcategory();
                                            while($row = mysql_fetch_array($cat)){
                                                echo '<li><a href="category.php?filter='.$row['title'].'">'.$row['title'].'</a></li>';
                                            }
                                        ?>
    
                                    </ul>
                                </li> 
								<li><a href="about.php">About Us</a></li> 
								<li><a href="contact.php">Contact</a></li>
								<li><a href="cart.php">Cart <span class="badge"></span></a></li>
							</ul>
						</div>
					</div>
                    <div class="col-sm-3">
						<div class="search_box pull-right">
                            <form action="index.php" method="post">
							     <input type="text" placeholder="Search" name="filter" />
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
    