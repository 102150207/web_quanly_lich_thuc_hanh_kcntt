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
								<li class="breadcrumb-item"><a href="index.html">Chương Trình Thực Hành</a>
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
							<h4 style = "color : blue"> <strong> Thông Tin Của Giao Viên Khoa CNTT </strong></h4>
							<?php 
								$id = $_GET['id'];
								$link = mysql_connect("localhost","root","") or die ("Khong the ket noi CSDL");
								mysql_select_db("final",$link);
								$sql = "SELECT * FROM giaovien WHERE MaGV = '".$id."'";
								$rs = mysql_query($sql,$link);
								$data = mysql_fetch_assoc($rs);
								$magv = $tengv = $ngaysinh = $diachi = $dienthoai = $gioitinh =  "";
								// nếu tồn tại ok thì check điều kiện
								if(isset($_POST['ok'])){

									if($_POST['tengv'] == ""){
										$errorten = "Vui lòng nhập lại tên giáo viên !";
									}else{
										$tengv = $_POST['tengv'];
									}
									if($_POST['ngaysinh'] == ""){
										$errorngaysinh = "Vui lòng nhập lại ngày sinh giáo viên !";
									}else{
										$ngaysinh = $_POST['ngaysinh'];
									}
									if($_POST['diachi'] == ""){
										$errordiachi = "Vui lòng nhập lại địa chỉ sinh giáo viên !";
									}else{
										$diachi = $_POST['diachi'];
									}
									if($_POST['dienthoai'] == ""){
										$errordienthoai = "Vui lòng nhập lại số điện thoại giáo viên !";
									}else{
										$dienthoai = $_POST['dienthoai'];
									}
									// nếu ko tồn tại cái giới tính
									if( ! isset($_POST['gioitinh'])){
										$errorgioitinh = "Vui lòng nhập lại giới tính giáo viên !";
									}else{
										$gioitinh = $_POST['gioitinh'];
									}
									if( $tengv && $ngaysinh && $diachi && $dienthoai && $gioitinh){
										$sqlupdate = "Update giaovien Set 
										TenGV = '".$tengv."'
										,GioiTinh = '".$gioitinh."'
										,NgaySinh = '".$ngaysinh."'
										,DiaChi = '".$diachi."'
										,SoDT = '".$dienthoai."'
										WHERE MaGV = '".$id."' ";
										mysql_query($sqlupdate);				
										header("location:SuatrangcanhanGV.php");
									}
								}
								
							?>
	<form style = "color : blue " action="" method = "POST">
		<br><br>
				<table>
					<tr> 
						<td><span>Tên Giao Viên :</span></td>
						<td><input type="text" name ="tengv" value = "<?php echo $data['TenGV']?>"/></td>
						<td style ="color:red"><?php echo isset($errorten) ? $errorten : "" ?></td>
					</tr>
					
					<tr> 
						<td><span>Gioi Tinh </span></td>
						<td colspan="2" class = "error" >
							Nam <input type="radio" name = "gioitinh" 
								<?php echo $data['GioiTinh'] == "Nam" ? 'checked ="checked"' : "" ?>
								value = "Nam"
							/>
							Nũ <input type="radio" name = "gioitinh"  
								<?php echo $data['GioiTinh'] == "Nu" ? 'checked ="checked"' : "" ?>
								value = "Nu"
							/>
							<?php echo isset($errorgioitinh) ? $errorgioitinh : "" ?>
						<td>
						<td></td>
					</tr>
					<tr> 
						<td><span>Ngày Sinh : </span></td>
						<td><input type="date" name = "ngaysinh"value = "<?php echo $data['NgaySinh']?>"/></td>
						<td style ="color:red"><?php echo isset($errorngaysinh) ? $errorngaysinh : "" ?></td>
					</tr>
					<tr> 
						<td><span>Địa Chỉ Giao Viên : </span></td>
						<td><input type="text" name = "diachi" value = "<?php echo $data['DiaChi']?>"/></td>
						<td style ="color:red"><?php echo isset($errordiachi) ? $errordiachi : "" ?></td>
					</tr>
					<tr> 
						<td><span>Số Điện Thoại : </span></td>
						<td><input type="text" name = "dienthoai" value = "<?php echo $data['SoDT']?>"/></td>
						<td style ="color:red"><?php echo isset($errordienthoai) ? $errordienthoai : "" ?></td>
					</tr>
					<tr> 
						<td colspan="3">
							<input style ="color:red" type="submit"  value = "OK" name = "ok"/> 
							<input style ="color:red" type="button" name = "resect" value="Resect" onclick="xoa()"/>
						</td>
					</tr>
				</table>
	</form>
							
							
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
								<li id="menu-academico-avaliacoes" ><a href="formdangnhapQL.php">Quản Lý</a></li>
								<li id="menu-academico-avaliacoes" ><a href="formdangnhapSV.php">Sinh Viên</a></li>
								
							</ul>
						</li>
						<li id="menu-academico" ><a href="trangcanhanGV.php"> <i class="fa fa-cogs" aria-hidden="true"></i><span>Xem Thông Tin cá Nhân</span> </a>
						
						</li>
						<li id="menu-academico" ><a href="lichdaytrangcanhanGV.php"> <i class="fa fa-cogs" aria-hidden="true"></i><span>Xem Lịch Dạy</span> </a>
						
						</li>
						<li id="menu-academico" ><a href="SuatrangcanhanGV.php"> <i class="fa fa-cogs" aria-hidden="true"></i><span>Sửa Thông Tin Cá Nhân</span> </a>
						
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