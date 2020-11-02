<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
	<title>SE Alumni</title>
  <link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/seshow.css">
	
</head>
<body>
 <div class="header-search">
      
      <form action="../seold/skeyword" method="POST">
        <input type="text" name="title">
        <input type="submit" name="submit" value="Search">
      </form>
     
      <a href="../seold/Logout" class="button" id="button1">ออกจากระบบ</button></a> 
      <a href="../seold/Profile" class="button" id="button2">ดูข้อมูลส่วนตัว</button></a>
  </div>
  
  <h2> ข้อมูลส่วนตัว </h2>
<table style="width:60%">
  <tr>
    <th id="h1">รหัสนักศึกษา</th>
    <th id="h2">คำนำหน้าชื่อ</th>
    <th id="h1">ชื่อ</th>
    <th id="h2">นามสกุล</th>
    <th id="h1">เบอร์โทรศัพท์</th>
    <th id="h2">ปีที่จบ</th>
	<th id="h1">ความถนัด</th>
	<th id="h2">Facebook</th>
    <th id="h1">E-mail</th>
    <th id="h2">ดูข้อมูลเพิ่มเติม</th>

  </tr>
  
  <?php
  foreach($AM->result_array() as $row){
  ?>
  <tr>
    <td><center><?=$row['se_studentid']?></center></td>
    <td><center><?=$row['se_numna']?></center></td>
    <td><center><?=$row['se_name']?></center></td>
    <td><center><?=$row['se_lastname']?></center></td>
    <td><center><?=$row['se_tel']?></center></td>
    <td><center><?=$row['se_yearend']?></center></td>
	<td><center><?=$row['se_skill']?></center></td>
	<td><center><?=$row['se_facebook']?></center></td>
    <td><center><?=$row['se_email']?></center></td>
  <td><center><a href="../seold/viewProfile/<?=$row['se_studentid']?>" >viewmore</button></a></center></td>

  </tr>
  <?php
  }
  ?>
</table>
<br><br><br>
</body>
</html>