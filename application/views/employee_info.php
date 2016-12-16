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

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
	<!--header-->
	<div class="agile-header">
		<h1>ข้อมูลพนักงาน</h1>
		<p>&nbsp;</p>
	</div>
	<!--//header-->
	<!--main-->
	<div class="agileits-main">
		<div class="wrap">
		<form action="#" method="post">
			<ul>
								 <li class="text-info">รหัสพนักงาน*</li>
								 <li><input type="text" name="emp_id" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							<ul>
								 <li class="text-info">ชื่อ*</li>
								 <li><input type="text" name="fnamename" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">นามสกุล*</li>
								 <li><input type="text" name="lname" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								<li class="text-info"> ที่อยู่ *</li>
								<li><textarea></textarea></li>
								<div class="clear"></div>
							</ul>
							 <ul>
								 <li class="text-info">Email *</li>
								 <li><input type="text" name="email" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Phone Number *</li>
								 <li><input type="text" name="phone" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">ตำแหน่ง *</li>
								 <li class="se"><select class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="q15_departureDatetime15[min]">
									<option>  </option>
									<option value="1">พนักงานฝ่ายสั่งซื้อสินค้า</option>
									<option value="2">พนักงานฝ่ายคลังสินค้า</option>
									<option value="3">ผู้บริหาร</option>
									<option value="4">ผู้ดูแลระบบ</option>
								  </select></li>
								 <div class="clear"></div>
							 </ul>
							 
							<ul>
								 <li class="text-info">Username*</li>
								 <li><input type="username" name="username" required placeholder="Username"></li>
								 <div class="clear"></div>
							 </ul>
							 
							 <ul>
								 <li class="text-info">Password*</li>
								 <li><input type="password" name="password" required placeholder="Password"></li>
								 <div class="clear"></div>
							 </ul>	
                             <ul>
								 <li class="text-info">สิทธิ์เข้าใช้ระบบ *</li>
								 <li><input type="radio" name="Status"<?php if (isset($status) && $status=="allow") echo "checked";?>value="allow">อนุญาต							   </li>
								 <li>
								   <input type="radio" name="Status"<?php if (isset($status) && $status=="disallow") echo "checked";?>value="disallow">								   ไม่อนุญาต
                                 </li>
								 <div class="clear"></div>
					       </ul>
                  <div class="clear"></div>					
				<div class="agile-submit">
                 <?php echo "<input type=\"Submit\" name=\"save\" value=\"บันทึก\">";?>
                 <?php echo "<input type=\"Submit\" name=\"back\" value=\"กลับไปหน้าแรก\">";?>				
		  </div>
                                                                              
		  <div class="clear"></div>
						
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
