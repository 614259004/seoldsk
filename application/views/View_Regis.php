<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SE Alumni website register</title>
    <link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/signup.css"> 
</head>
<body>
    <form action="../seold/add_Regis" method="POST">
        <h1> ข้อมูลส่วนตัว </h1>

        <label for="cars">เลือกสถานะปัจจุบันของคุณ</label>
  <select name="se_status_id" id="se_status_id">
    <option value="2">ศิษย์เก่า</option>
    <option value="1">อาจารย์</option>
    <option value="3">ศิษย์ปัจจุบัน</option>
  </select>

  <br><br>
        

    <div class="form-group">
    <label> รหัสนักศึกษา</label>
    <input type="text" name="se_studentid">
  </div>
  <div class="form-group">
    <label>คำนำหน้าชื่อ</label>
    <input type="text" name="se_numna" >
  </div>
  <div class="form-group">
    <label>ชื่อ</label>
    <input type="text" name="se_name">
  </div>
  <div class="form-group">
    <label>นามสกุล</label>
    <input type="text" name="se_lastname">
  </div>
  <div class="form-group">
    <label>วันเกิด</label>
    <input type="date" name="se_birthday">
  </div>
  <div class="form-group">
    <label>บัตรประชานชน</label>
    <input type="text" name="se_idcard">
  </div>
  
  <div class="form-group">
    <label>ปีที่จบการศึกษา</label>
    <input type="text" name="se_yearend">
  </div>
  <div class="form-group">
    <label>ความถนัด</label>
    <input type="text" name="se_skill">
  </div>

  <h1> ข้อมูลการติดต่อ </h1>
  <div class="form-group">
    <label>เบอร์โทรศัพท์</label>
    <input type="text" name="se_tel">
  </div>
  <div class="form-group">
    <label>Facebook</label>
    <input type="text" name="se_facebook" >
  </div>
<div class="form-group">
    <label >Email</label>
    <input type="text" name="se_email" >
  </div>

  <h1> ที่อยุ่ปัจจุบัน </h1>
  <div class="form-group">
    <label >บ้านเลขที่</label>
    <input type="text" name="se_lakete" >
  </div>
  <div class="form-group">
    <label >หมู่ที่</label>
    <input type="text" name="se_mu" >
  </div>
  <div class="form-group">
    <label >ตำบล</label>
    <input type="text" name="se_district" >
  </div>
  <div class="form-group">
    <label >อำเภอ</label>
    <input type="text" name="se_aumpa" >
  </div>
<div class="form-group">
    <label >จังหวัด</label>
    <input type="text" name="se_province">
  </div>

  <h1> ข้อมูลเกี่ยวกับที่ทำงาน </h1>
  <div class="form-group">
    <label >ชื่อที่ทำงาน</label>
    <input type="text" name="work_name" >
  </div>
  <div class="form-group">
    <label >ตำแหน่งในที่ทำงาน</label>
    <input type="text" name="work_rank" >
  </div>
  <div class="form-group">
    <label >บ้านเลขที่</label>
    <input type="text" name="work_lakete" >
  </div>
  <div class="form-group">
    <label >หมู่ที่</label>
    <input type="text" name="work_mu" >
  </div>
  <div class="form-group">
    <label >ตำบล</label>
    <input type="text" name="work_district" >
  </div>
<div class="form-group">
    <label >อำเภอ</label>
    <input type="text" name="work_aumpua">
  </div>
  <div class="form-group">
    <label >จังหวัด</label>
    <input type="text" name="work_province">
  </div>
  <div class="form-group">
    <label >เบอร์โทรศัพท์</label>
    <input type="text" name="work_tel">
  </div>
  <h1> Password สำหรับ login </h1>
  <div class="form-group">
    <label >Password</label>
    <input type="password" name="se_password">
  </div>
  <br>
  <input type="submit" class="btn btn-primary">
  <div class="back-login">
    <a class="button" href="../seold/index">Back to home page</a><br><br>
  </div>
  
</form>


</body>
</html>