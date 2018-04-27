<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Calendar :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- calendar -->
	<link rel="stylesheet" href="css/monthly.css">
	<!-- //calendar -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
		<div class="left-content">
			<div class="mother-grid-inner">
              <!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile">
					
						<div class="logo-dhbk" >
								<a class="wd-logo"  href="errorpage.php">
									<img src="images/logo-k_cntt.png" alt="">
								</a>
								<a class="wd-logo" href="errorpage.php">
									<img src="images/logo-small.png" alt="">
								</a>
							</div>
						<div class="logo-w3-agile">
							<h1><a href="index.html">Hệ Thống Quản Lý Lịch Thực Hành Phòng Máy Khoa CNTT ĐH BÁCH KHOA ĐÀ NẴNG</a></h1>
						</div>
						
					</div>
				</div>
<!--heder end here-->
						<div style = "height : 10px;border: 2px solid #33d49c;">
							<ol class="breadcrumb" style = "">
								<li class="breadcrumb-item"><a href="index.php">Trang Chủ</a>
								<i class="fa fa-angle-right"></i></li>	
								<li class="breadcrumb-item"><a href="#">Thông Tin Phòng Ban</a>
								<i class="fa fa-angle-right"></i></li>
								<li class="breadcrumb-item"><a href="index.html">Chương Trình Thực Hành</a>
								<i class="fa fa-angle-right"></i></li>
								<li class="breadcrumb-item"><a href="index.html">Thông Báo </a>
								<i class="fa fa-angle-right"></i></li>
								<li class="breadcrumb-item"><a href="#">Đơn Đề Nghị</a>
								<i class="fa fa-angle-right"></i></li>
								<li class="breadcrumb-item"><a href="#">Đăng Nhập Sinh Viên</a>
									 <!--<ol> 
										<li> 
											<a href="">Quản Lý</a>
										</li>
										<li> 
											<a href="">Giao Viên</a>
										</li>
										<li> 
											<a href="">Sinh Viên</a>
										</li>
									</ol> -->
								<i class="fa fa-angle-right"></i></li>
							</ol>
<!-- grids -->			</div>
				<div class="grids">
				
					
				
					<div class="agile-calendar-grid">
						<div class="page">
							
							<div class="w3l-calendar-left">
								<div class="calendar-heading">
									
								</div>
								<div class="monthly" id="mycalendar"></div>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!-- //grids -->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
			<div class="sidebar-menu">
				<header class="logo1">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
				</header>
				<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
				<div class="menu">
					<ul id="menu" >
						<li>
							<a href="index.php"><i class="fa fa-tachometer"></i> <span>Trang Chủ</span><div class="clearfix"></div></a>
						</li>
						<li id="menu-academico" ><a href=""><i class="fa fa-cogs" aria-hidden="true"></i><span>Đăng Nhập</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
							<ul id="menu-academico-sub" >
								<li id="menu-academico-avaliacoes" ><a href="formdangnhapQL.php">Quản Lý</a></li>
								<li id="menu-academico-avaliacoes" ><a href="formdangnhapGV.php">Giao Viên</a></li>
								<li id="menu-academico-avaliacoes" ><a href="formdangnhapSV.php">Sinh Viên</a></li>
							</ul>
						</li>
						<li id="menu-academico" >
							<a href="thongtinkhoa.php"><i class="fa fa-envelope nav_icon"></i><span>Thông Tin Khoa</span><div class="clearfix"></div></a>
						</li>
						<li id="menu-academico" >
							<a href="thongtinthaycokhoa.php"><i class="fa fa-envelope nav_icon"></i><span>Thông Tin Giao Viên</span><div class="clearfix"></div></a>
						</li>
						
						<li>
							<a href=""><i class="fa fa-table"></i>  <span>Thông Tin Phòng Máy</span><div class="clearfix"></div></a>
						</li>
						
						<li>
							<a href=""><i class="fa fa-table"></i>  <span>Chương Trình Thực Hành</span><div class="clearfix"></div></a>
						</li>
						
						<li>
							<a href="lich.php"><i class="fa fa-map-marker" aria-hidden="true"></i>  <span>Lịch</span><div class="clearfix"></div></a>
						</li>
						<li>
							<a href="diachi.php"><i class="fa fa-map-marker" aria-hidden="true"></i>  <span>Địa Chỉ</span><div class="clearfix"></div></a>
						</li>
						<li id="menu-academico" >
							<a href=""><i class="fa fa-envelope nav_icon"></i><span>Phản Hồi</span><div class="clearfix"></div></a>
						</li>
					</ul>
				</div>
			</div>
					
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>