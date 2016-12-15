<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title> Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Custom CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type='text/css' />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
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
<div class="left-content">
	   <div class="mother-grid-inner">
             <!--header start here-->
				<div class="header-main">
				  <div class="w3layouts-left">

						  <!--search-box-->
							  <div class="w3-search-box">
							    <form action="#" method="post">
							      <input type="text" placeholder="Search..." required>
							      <input type="submit" value="">
                                </form>
				    </div><!--//end-search-box-->
							<div class="clearfix"> </div>
				  </div>


			      <div class="clearfix"> </div>
				</div>
<!--heder end here-->
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="file:///C|/xampp/htdocs/menu/index.html">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol>
<!--four-grids here-->
		<div class="four-grids">
		  <div class="clearfix"></div>
				</div>
<!--//four-grids here-->
<!--agileinfo-grap--><!--//agileinfo-grap-->
<!--photoday-section--><!--//photoday-section-->
	<!--w3-agileits-pane--><!--//w3-agileits-pane-->
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
<!--copy rights start here--><!--COPY rights end here-->
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

			     	  <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> พนักงาน</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
	    	   		     <ul id="menu-academico-sub" >
					        <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/emp");?>">ข้อมูลพนักงาน</a></li>
							<li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/empm");?>">จัดการข้อมูลพนักงาน</a></li>         				 </ul>
    				   </li>

                       <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> บริษัทคู่ค้า</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
						 <ul id="menu-academico-sub" >
						    <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/com");?>">ข้อมูลบริษัทคู่ค้า</a></li>
							<li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/comp");?>">จัดการข้อมูลบริษัทคู่ค้า</a></li>
						 </ul>
					   </li>

                       <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> สินค้า</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
						 <ul id="menu-academico-sub" >
						    <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/pro");?>">ข้อมูลสินค้า</a></li>
						    <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/prod");?>">จัดการข้อมูลสินค้า</a></li>
    					  </ul>
					   </li>

                       <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> การสั่งซื้อ</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
						  <ul id="menu-academico-sub" >
						     <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/orde");?>">ข้อมูลการสั่งซื้อ</a></li>
							 <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/order");?>">จัดการข้อมูลการสั่งซื้อ</a></li>
						  </ul>
                       </li>

                       <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> การเบิกสินค้า</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
						  <ul id="menu-academico-sub" >
						     <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/pic");?>">ข้อมูลการเบิกสินค้า</a></li>
							 <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/pick");?>">จัดการข้อมูลการเบิกสินค้า</a></li>
						  </ul>
                        </li>

                        <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> การคืนสินค้า</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
						  <ul id="menu-academico-sub" >
						     <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/ret");?>">ข้อมูลการคืนสินค้า</a></li>
						     <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/retu");?>">จัดการข้อมูลการคืนสินค้า</a></li>
     					  </ul>
	                    </li>

                        <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> สินค้าชำรุด</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
						   <ul id="menu-academico-sub" >
					          <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/dam");?>">ข้อมูลสินค้าชำรุด</a></li>
							  <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/dama");?>">จัดการข้อมูลสินค้าชำรุด</a></li>
                           </ul>
				         </li>

                         <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> รายงาน</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
						   <ul id="menu-academico-sub" >
						      <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/repe");?>">รายงานข้อมูลพนักงาน</a></li>
						      <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/repc");?>">รายงานข้อมูลบริษัทคู่ค้า</a></li>
							  <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/repp");?>">รายงานข้อมูลสินค้า</a></li>
							  <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/repo");?>">รายงานข้อมูลการสั่งซื้อ</a></li>
                              <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/repk");?>">รายงานข้อมูลการเบิกสินค้า</a></li>
							  <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/repr");?>">รายงานข้อมูลการคืนสินค้า</a></li>
							  <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url("menu/repd");?>">รายงานข้อมูลสินค้าชำรุด</a></li>
							</ul>
						  </li>

						  <li id="menu-academico" ><a href="file:///C|/xampp/htdocs/menu/errorpage.html"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>ออกจากระบบ</span><div class="clearfix"></div></a></li>

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
<script src="file:///C|/xampp/htdocs/menu/js/jquery.nicescroll.js"></script>
<script src="file:///C|/xampp/htdocs/menu/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="file:///C|/xampp/htdocs/menu/js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
<!-- morris JavaScript -->
<script src="file:///C|/xampp/htdocs/menu/js/raphael-min.js"></script>
<script src="file:///C|/xampp/htdocs/menu/js/morris.js"></script>
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
