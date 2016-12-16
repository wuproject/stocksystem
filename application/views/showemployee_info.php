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
		<h1>ข้อมูลพนักงาน</h1>
		<p>&nbsp;</p>
	</div>
	<div class="agileits-main">
		<div class="wrap">
		<form action="#" method="post">
		<ul>
           <li class="text-info">ตำแหน่ง 
              <select class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="q15_departureDatetime15[min]">
                <option>  </option>
                <option value="1">พนักงานฝ่ายสั่งซื้อสินค้า</option>
                <option value="2">พนักงานฝ่ายคลังสินค้า</option>
                <option value="3">ผู้บริหาร</option>
                <option value="4">ผู้ดูแลระบบ</option>
              </select>
           </li>
           
		</ul>
        <div class="clear"></div>	
        <div class="clear"></div>	   	
	      <ul>
			  <li>
			    <table width="877" height="64" border="1">
			      <tr>
                    <th width="24" height="29" scope="col">No.</th>
			        <th width="83" scope="col">รหัสพนักงาน</th> 
                    <th width="115" scope="col">ชื่อ</th>
			        <th width="114" scope="col">นามสกุล</th>		        
			        <th width="130" scope="col">ที่อยู่</th> 
                    <th width="119" scope="col">Email ID</th>			        	        
                    <th width="117" scope="col">Phone Number</th>
                    <th width="123" scope="col">สิทธิ์เข้าใช้ระบบ</th>		        
			        
		          </tr>
		          <tr>
			        <td>&nbsp;</td>
                    <td>&nbsp;</td>
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
        <div class="clear"></div>
        <div class="agile-submit">  
       
            <?php echo "<input type=\"Submit\" name=\"delete\" value=\"ลบ\">";?>
            <?php echo "<input type=\"Submit\" name=\"edit\" value=\"แก้ไข\">";?>             
            <?php echo "<input type=\"Submit\" name=\"back\" value=\"กลับไปหน้าแรก\">";?>
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
