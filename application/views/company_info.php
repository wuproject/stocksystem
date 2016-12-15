<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>ข้อมูลการคืนสินค้าxxxx</title>
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
		<h1>ข้อมูลบริษัทคู่ค้า</h1>
		<p>&nbsp;</p>
	</div>
	<!--//header-->
	<!--main-->
	<div class="agileits-main">
		<div class="wrap">
		<form action="#" method="post">
            <ul>
	         <li class="text">รหัสบริษัท  :  </li>
				<li><input name="comp_id" type="text" required></li>
		    </ul>
            <ul>
	         <li class="text">ชื่อบริษัท  :  </li>
				<li><input name="comp_name" type="text" required></li>
		    </ul>
            <ul>
				<li class="text">ที่อยู่  :  </li>
				<li><textarea></textarea></li>
			</ul>
          <ul>
				<li class="text">Phone Number *:</li>
                <li><input name="phone" type="text" required></li>
		  </ul>
			<ul>
			  <li class="text">Email  *  :  </li>
				<li><input name="E-mail" type="text" required></li>
			</ul>

			<div class="clear"></div>
		  <div class="agile-submit">
                 <?php echo "<input type=\"Submit\" name=\"add\" value=\"เพิ่ม\">";?>
                 <?php echo "<input type=\"Submit\" name=\"delete\" value=\"ลบ\">";?>
                 <?php echo "<input type=\"Submit\" name=\"edit\" value=\"แก้ไข\">";?>
                 <?php echo "<input type=\"Submit\" name=\"save\" value=\"บันทึก\">";?>
                 <?php echo "<input type=\"Submit\" name=\"back\" value=\"กลับไปหน้าแรก\">";?>
		  </div>
			 <ul>
			  <li>
			    <table width="849" border="1">
			      <tr>
                    <th width="45" height="24" scope="col">No.</th>
			        <th width="67" scope="col">รหัสบริษัท</th>
                    <th width="168" scope="col">ชื่อบริษัท</th>
			        <th width="227" scope="col">ที่อยู่</th>
                    <th width="137" scope="col">Phone Number </th>
			        <th width="165" scope="col">Email </th>


		          </tr>
		          <tr>
			        <td>&nbsp;</td>
                    <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
		       </table>
	        </li>
		</ul>
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
