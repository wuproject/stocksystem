<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>ข้อมูลการคืนสินค้า</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sales Inquiry Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="<?php echo base_url();?>show/css/style.css" type='text/css' />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
	<!--header-->
	<div class="agile-header">
		<h1>ข้อมูลการคืนสินค้า</h1>
		<p>&nbsp;</p>
	</div>
	<!--//header-->
	<!--main-->
	<div class="agileits-main">
		<div class="wrap">
		<form action="#" method="post">
			<ul>
				<li class="text">รหัสใบคืนสินค้า: </li>
				<li><input name="return_id" type="text" required></li>
			</ul>
			<ul>
			  <li class="text">รหัสสินค้า  :  </li>
				<li><input name="product_id" type="text" required></li>
			</ul>
            <ul>
				<li class="text">ชื่อสินค้า  :  </li>
				<li><input name="product_name" type="text" required></li>
			</ul>
            <ul>
				<li class="text">วันที่คืนสินค้า  :  </li>
				<li><input name="return_date" type="text" required></li>
			</ul>
          <ul>
				<li class="text">วันที่รับสินค้า  :  </li>
				<li><input name="receive_date" type="text" required></li>
			</ul>
			<ul>
			  <li class="text">จำนวนสินค้า  :  </li>
				<li><input name="num" type="text" required></li>
			</ul>
            <ul>
			  <li class="text">ราคา  :  </li>
				<li><input name="value" type="text" required></li>
			</ul>
            <ul>
			  <li class="text">ยอดรวมราคา  :  </li>
				<li><input name="total" type="text" required></li>
			</ul>
            <ul>
			  <li class="text">รหัสบริษัท  :  </li>
				<li><input name="comp_id" type="text" required></li>
			</ul>
            <ul>
			  <li class="text">ชื่อบริษัท  :  </li>
				<li><input name="comp_name" type="text" required></li>
			</ul>
			
			<div class="clear"></div>
		  <div class="agile-submit">                 
                 <?php echo "<input type=\"Submit\" name=\"save\" value=\"บันทึก\">";?>
                 <?php echo "<input type=\"Submit\" name=\"back\" value=\"กลับไปหน้าแรก\">";?>
		  </div>        			
			
          </form>
		</div>	
	</div>
<!--//main-->
<!--footer-->
<div class="footer-w3">
	<p>&nbsp;</p>
</div>
<!--//footer-->
</body>
</html>
