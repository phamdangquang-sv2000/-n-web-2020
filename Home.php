<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang Chủ</title>
	<!-- Import Boostrap css, js, font awesome here -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="./Home.css" rel="stylesheet">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-branch" href="file:///C:/xampp/htdocs/my_website/Home.htm">
			<img src="./images/logo2.png" height="80" width="100">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" 
			data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>&emsp;

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav mr-auto">

				<li class="nav-item">
					<a class="nav-link active" href="#">Mua Vé</a>
				</li>&emsp;
				
				<li class="nav-item">
					<a class="nav-link" href="#">Phim</a>
				</li>&emsp;	
				<li class="nav-item dropdown">
					<a class="nav-link" href="#" id="navbarDropdown">Sự Kiện</a>
					<div class="dropdown-content">
						<a class="dropdown-item" href="#">Ưu Đãi</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Phim Hay Trong Tháng</a>
					  </div>
				</li>&emsp;
				
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Giá Vé</a>
				</li>&emsp;

				<li class="nav-item">
					<a class="nav-link" href="#">Góc Điện Ảnh</a>
				</li>&emsp;

				<li class="nav-item">
					<a class="nav-link" href="#">Hỗ Trợ</a>
				</li>&emsp;

				<li class="nav-item">
					<a class="nav-link" href="#">Thành Viên</a>
				</li>&emsp;

				<li class="nav-item">
					<a class="nav-link" href="http://localhost/my_website/login.php">Đăng Nhập</a>
				</li>
			</ul>
		</div>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		  </form>
		</div>
	  </nav>
	</div>
</nav>
<!-- Carousel -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>		
		<li data-target="#slides" data-slide-to="3"></li>
	</ul>
	<DIV class="carousel-inner">
		<div class="carousel-item active">
			<img src="./images/anh1.png">
			<div class="carousel-caption">
				<!-- chèn nút play hoặc button "xem chi tiết " và " trailer" -->
				<!-- <button type="button" class="btn btn-outline-light btn-lg">XEM CHI TIẾT</button> -->
				<!-- <button type="button" class="btn btn-primary btn-lg">TRAILER</> -->
			</div>
		</div>

		<div class="carousel-item">
			<img src="./images/anh2.jpg">
			<div class="carousel-caption">
				<!-- chèn nút play hoặc button "xem chi tiết " và " trailer" -->
				<!-- <button type="button" class="btn btn-outline-light btn-lg">XEM CHI TIẾT</button> -->
				<!-- <button type="button" class="btn btn-primary btn-lg">TRAILER</> -->
				
			</div>
		</div>

		<div class="carousel-item">
			<img src="./images/anh3.jpg">
			<div class="carousel-caption">
				<!-- chèn nút play hoặc button "xem chi tiết " và " trailer" -->
				<!-- <button type="button" class="btn btn-outline-light btn-lg">XEM CHI TIẾT</button> -->
				<!-- <button type="button" class="btn btn-primary btn-lg">TRAILER</> -->


			</div>
		</div>

		<div class="carousel-item">
			<img src="./images/anh4.jpg">
			<div class="carousel-caption">
				<!-- chèn nút play hoặc button "xem chi tiết " và " trailer" -->
				<!-- <button type="button" class="btn btn-outline-light btn-lg">XEM CHI TIẾT</button> -->
				<!-- <button type="button" class="btn btn-primary btn-lg">TRAILER</> -->


			</div>
		</div>

		<!-- Control-->
		<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span></a>
        <a class="carousel-control-next" href="#slides" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
	</DIV>
</div>
<!-- Container movies -->
<div class="tab">
	<button class="tablinks" onclick="openCalendar(event, 'phimdangchieu')" id="first">Phim Đang Chiếu</button>
	<button class="tablinks" onclick="openCalendar(event, 'phimsapchieu')">Phim Sắp Chiếu</button>
  </div><br><br>
  
  <div id="phimdangchieu" class="tabcontent">
	  <!--Hàng 1-->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/nguyenduchoang.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/johndoe.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/Natasha.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br>

	<!--hàng 2-->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/nguyenduchoang.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/johndoe.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/Natasha.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br>

	<!--hàng 3-->

	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/nguyenduchoang.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/johndoe.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/Natasha.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br><br>
	<div class="col-md-12 col-sm-12 col-xs-12 pull-right"><a href="#" class="btn secondary fl-right">Xem thêm</a></div>
</div>
	<!--exit-->

  
  <div id="phimsapchieu" class="tabcontent">
	<!--Hàng 1-->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/nguyenduchoang.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/johndoe.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/Natasha.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br>

	<!--hàng 2-->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/nguyenduchoang.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/johndoe.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/Natasha.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br>

	<!--hàng 3-->

	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/nguyenduchoang.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/johndoe.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="./images/Natasha.png">
					<div class="card-body">
						<h4 class="card-title">Title Movie</h4>
						<p class="card-text">Details</p>
						<div>
							<a href="#" class="btn btn-outline-secondary">Mua Vé</a>
							<a href="#" class="btn btn-outline-secondary">Trailer</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br><br>
	<div class="col-md-12 col-sm-12 col-xs-12 pull-right"><a href="#" class="btn secondary fl-right">Xem thêm</a></div>
</div><br><br><br>	
<!--exit-->

 
<script>
  function openCalendar(evt, cityName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
	  tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
	  tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";
  }
  document.getElementById("first").click();
  </script>

<!--Exit Container movies -->



<div class="container-fluid padding">	
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Contact us</h2>
		</div>
		<div class="col-12 social padding">
			<a href="https://www.facebook.com/profullmoon/"><i class="fab fa-facebook"></i></a>
			<a href="https://twitter.com/full_moon_prod"><i class="fab fa-twitter"></i></a>
			<a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fab fa-google-plus-g"></i></a>
			<a href="https://www.instagram.com/fullmoon.pro/"><i class="fab fa-instagram"></i></a>
			<a href="https://www.youtube.com/channel/UCcTiFzDhCW-sEwJeSQOlE2Q"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div>	
<footer>
	<div class="container-fluid padding">	
		<div class="row text-center">
			<div class="col-md-4">
				<img src="./images/logo.jpg" width="300" height=200>
				<hr class="light">
				<p>028 3775 5035</p>
				<p>websitedevelopment@gmail.com</p>
				<p>19 Đường Nguyễn Hữu Thọ, Tân Hưng, Quận 7, Hồ Chí Minh</p>
			</div>
			<div class="col-md-4">	
				<img src="./images/logo2.png" width="300" height=200>			
				<hr class="light">
				<h5>Working hours</h5>
				<hr class="light">
				<p>Monday-Friday: 8am - 5pm</p>
				<p>Weekend: 8am - 12am</p>
			</div>
			<div class="col-md-4">	
				<img src="./images/logo3.jpg "width="300" height=200>			
				<hr class="light">
				<h5>Services</h5>
				<hr class="light">
				<p>Outsourcing</p>
				<p>Website development</p>
				<p>Mobile applications</p>
			</div>
			<div class="col-12">
				<hr class="light-100">
				<h5>&copy; WebPro</h5>
			</div>
		</div>
	</div>
</footer>
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>	