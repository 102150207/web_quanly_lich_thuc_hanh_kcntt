<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
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
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<div class="page-container">
		<!--/content-inner-->
		<!--phần đầu -->
		<div class="left-content">
			<div class="mother-grid-inner">
					<!--header start here-->
					<!--****************************************************************************************heder end here-->
				<div class="header-main">
						<!--///////////////-->
						<div class="logo-w3-agile">
							<div class="logo-dhbk" >
								<a class="wd-logo"  href="errorpage.php">
									<img src="images/logo-k_cntt.png" alt="">
								</a>
								<a class="wd-logo" href="errorpage.php">
									<img src="images/logo-small.png" alt="">
								</a>
							</div>
							
							<div class = "title" >
								<h1><a href="index.php">Hệ Thống Quản Lý Lịch Thực Hành Phòng Máy Khoa CNTT ĐH BÁCH KHOA ĐÀ NẴNG</a></h1>
							</div>
						</div>
						<!--///////////////-->
						
						
				<!--****************************************************************************************heder end here-->
						<ol class="breadcrumb" style = "border: 2px solid #33d49c;">
								<li class="breadcrumb-item"><a href="index.php">Trang Chủ</a>
								<i class="fa fa-angle-right"></i></li>	
								<li class="breadcrumb-item"><a href="#">Thông Tin Phòng Ban</a>
								<i class="fa fa-angle-right"></i></li> 
								<li class="breadcrumb-item"><a href="">Chương Trình Thực Hành</a>
								<i class="fa fa-angle-right"></i></li> 
								<li class="breadcrumb-item"><a href="index.php">Thông Báo </a>
								<i class="fa fa-angle-right"></i></li>
								<li class="breadcrumb-item"><a href="#">Đơn Đề Nghị</a>
								<i class="fa fa-angle-right"></i></li>
								<li class="breadcrumb-item"><a href="#">Đăng Nhập Sinh Viên</a>
									
								
						</ol>	
				<!--four-grids here-->
						
				<!--//four-grids here-->
				<!--trangchinhgiua-->
					<div class="agileinfo-grap">
						<div class="agileits-box">
							<div style = " height : 50px; background-color:blue;text-align : center" > 
								
								<h2 style = "color : white;">Trang Thông Tin Cho Quản Lý</h2>
							</div>
							<h4 style = "color : blue"><strong >Thông Tin Tất Cả Các Lớp của Khoa CNTT</strong></h4>
							<?php 
								$link = mysql_connect("localhost","root","") or die ("Khong the ket noi CSDL");
								mysql_select_db("final",$link);
								$sql = "select * from phong";
								$rs = mysql_query($sql,$link);
								echo '<table border ="1" width = "100%"  style = "color : blue">';
								
									echo '<tr><th>Mã Phòng</th><th>Tên Phòng</th><th>Delete</th>
									</tr>';
									while($row = mysql_fetch_array($rs, MYSQL_BOTH)){
										echo '<tr><td>'.$row['MaPHG'].'</td> <td>'.$row['TenPHG'].'</td> 
										<td><a style = "color : red" href="xulyxoaPhong.php?id='.$row['MaPHG'].'">xxxxx</a></td>
										</tr>';
									}
								echo '</table>';
		// giai phong tap cac ban ghi trong rs 
								mysql_free_result($rs);
								mysql_close($link);
								?>
							
							
						</div>
					</div>
					<!--trangchinhgiua-->
				<!--photoday-section-->	
							
										
				
				<div class="clearfix"></div>
						<!--//photoday-section-->	
						<!--w3-agileits-pane-->	
				<div class="w3-agileits-pane">
					
					
					
					

				 <!--//Bản Đồ-->	
				<div class="map">
					<div class="col-md-6 w3layouts-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.183033874468!2d150.8649541095356!3d-33.678324494541656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1476529656354"  frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-6 agileits-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106224.83240082047!2d150.87676655803944!3d-33.6953354022623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1476529926928" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-6 agileinfo-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424521.98724489537!2d150.6419337943232!3d-33.77156856642666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1476529981265" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-6 w3-agileits-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6697825.113257229!2d144.173733109507!3d-34.946019835412905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1476530044829" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="clearfix"> </div>
				</diV>
					  <!--//w3-agileits-pane-->	
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
						<p style = " height: 150px; color : white;    background-color: #1b93e1;">
						<br><br>© Trường ĐH Bách Khoa Đà Nẵng 2017  <br>
							vovantrinhdhbkdn@gmail.com<br>
							Thiết kế bởi :<a href="http://w3layouts.com/" target="_blank" style = "color : red">Võ Văn Trinh</a> <br>
							Lớp : 15T3
						</p>
					</div>	
					<!--COPY rights end here-->
				</div>
			</div>
			  <!--//content-inner-->
				<!--/sidebar-menu-->
			<!--Phần kề cuối-->
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
		
								<li id="menu-academico-avaliacoes" ><a href="formdangnhapGV.php">Giao Viên</a></li>
								<li id="menu-academico-avaliacoes" ><a href="formdangnhapSV.php">Sinh Viên</a></li>
							</ul>
						</li>
						<li id="menu-academico" ><a href=""><i class="fa fa-cogs" aria-hidden="true"></i><span>Xem Thông Tin</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
							<ul id="menu-academico-sub" >
		
								<li id="menu-academico-avaliacoes" ><a href="qlxemqv.php">Giao Viên</a></li>
								<li id="menu-academico-avaliacoes" ><a href="xemthongtinsinhvien.php">Sinh Viên</a></li>
								<li id="menu-academico-avaliacoes" ><a href="xemthongtinlop.php">Lớp Học</a></li>
								<li id="menu-academico-avaliacoes" ><a href="xemthongtinmonhoc.php">Môn Học</a></li>
								<li id="menu-academico-avaliacoes" ><a href="xemthongtinlichTH.php">Lịch Thực Hành</a></li>
								<li id="menu-academico-avaliacoes" ><a href="xemthongtinphonghoc.php">Phòng Học</a></li>
							</ul>
						</li>
						<li id="menu-academico" ><a href=""><i class="fa fa-cogs" aria-hidden="true"></i><span>Tìm Kiếm Thông Tin</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
							<ul id="menu-academico-sub" >
		
								<li id="menu-academico-avaliacoes" ><a href="TimKiemGV.php">Giao Viên</a></li>
								<li id="menu-academico-avaliacoes" ><a href="TimKiemSV.php">Sinh Viên</a></li>
								<li id="menu-academico-avaliacoes" ><a href="TimKiemLTH.php">Lịch Thực Hành</a></li>
							</ul>
						</li>
						<li id="menu-academico" ><a href=""><i class="fa fa-cogs" aria-hidden="true"></i><span>Thêm  Thông Tin</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
							<ul id="menu-academico-sub" >
		
								<li id="menu-academico-avaliacoes" ><a href="ThemGV.php">Giao Viên</a></li>
								<li id="menu-academico-avaliacoes" ><a href="ThemSV.php">Sinh Viên</a></li>
								<li id="menu-academico-avaliacoes" ><a href="ThemLop.php">Lớp Học</a></li>
								<li id="menu-academico-avaliacoes" ><a href="ThemMH.php">Môn Học</a></li>
								<li id="menu-academico-avaliacoes" ><a href="ThemLTH.php">Lịch Thực Hành</a></li>
								<li id="menu-academico-avaliacoes" ><a href="ThemPH.php">Phòng Học</a></li>
							</ul>
						</li>
						<li id="menu-academico" ><a href=""><i class="fa fa-cogs" aria-hidden="true"></i><span>Sửa Thông Tin</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
							<ul id="menu-academico-sub" >
		
								<li id="menu-academico-avaliacoes" ><a href="SuaXemGV.php">Giao Viên</a></li>
								<li id="menu-academico-avaliacoes" ><a href="Suaxemthongtinsinhvien.php">Sinh Viên</a></li>
								<li id="menu-academico-avaliacoes" ><a href="Suaxemthongtinmonhoc.php">Môn Học</a></li>
								<li id="menu-academico-avaliacoes" ><a href="SuaxemthongtinlichTH.php">Lịch Thực Hành</a></li>
							</ul>
						</li>
						<li id="menu-academico" ><a href=""><i class="fa fa-cogs" aria-hidden="true"></i><span>Xóa Thông Tin</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
							<ul id="menu-academico-sub" >
		
								<li id="menu-academico-avaliacoes" ><a href="XoaxemGV.php">Giao Viên</a></li>
								<li id="menu-academico-avaliacoes" ><a href="Xoaxemthongtinsinhvien.php">Sinh Viên</a></li>
								<li id="menu-academico-avaliacoes" ><a href="Xoaxemthongtinlop.php">Lớp Học</a></li>
								<li id="menu-academico-avaliacoes" ><a href="Xoaxemthongtinmonhoc.php">Môn Học</a></li>
								<li id="menu-academico-avaliacoes" ><a href="XoaxemthongtinlichTH.php">Lịch Thực Hành</a></li>
								<li id="menu-academico-avaliacoes" ><a href="Xoaxemthongtinphonghoc.php">Phòng Học</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<!--Phần cuối-->
			<div class="clearfix"></div>		
		</div>
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
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
</body>
</html>
