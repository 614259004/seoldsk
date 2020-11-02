<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>dit profile</title>
  <link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/signup.css">
	
</head>
<body>
<center><h2>เเก้ไขข้อมูลส่วนตัว</h2></center>             
    <?php
      foreach($AM as $row){
    ?>
    <form method="post" action="../seold/edit_Profile">
      <div class="container">
        <tr>
          <td>
            <input type="text" hidden name="se_studentid"  value="<?php echo $row->se_studentid; ?>" </th><br>

            <th><a class="title">ชื่อ </a>
              <input class="input none_border" type="text" name="se_name" value="<?php echo $row->se_name; ?>"
            </th>
            <br><br><br>

            <th><a class="title"> นามสกุล </a>
              <input class="input" type="date" name="se_lastname" value="<?php echo $row->se_lastname; ?>"
            </th>
            <br><br><br>

            <th><a class="title">เบอร์โทรศัพท์ </a>
              <input class="input" type="text" name="se_tel" value="<?php echo $row->se_tel; ?>"
            </th>
            <br><br><br>
            <th><a class="title">ความถนัด</a>
              <input class="input" type="text" name="se_skill" value="<?php echo $row->se_skill; ?>"
            </th>
            <br><br><br>

            <th><a class="title">Facebook </a>
              <input class="input" type="text" name="se_facebook" value="<?php echo $row->se_facebook; ?>"
            </th>
            <br><br><br>

            <th><a class="title">Email </a>
              <input class="input" type="text" name="se_email" value="<?php echo $row->se_email; ?>"
            </th>
            <br><br><br>

        <h2>ข้อมูลที่ทำงาน</h2>

        <th><a class="title">ชื่อบริษัท </a>
              <input class="input" type="text" name="work_name" value="<?php echo $row->work_name; ?>"
            </th>
            <br><br><br>
            <th><a class="title">เลขที่ </a>
              <input class="input" type="text" name="work_lakete" value="<?php echo $row->work_lakete; ?>"
            </th>
            <br><br><br>

            <th><a class="title">หมู่ </a>
              <input class="input" type="text" name="work_mu" value="<?php echo $row->work_mu; ?>"
            </th>
            <br><br><br>

            <th><a class="title">ตำบล </a>
              <input class="input" type="text" name="work_district" value="<?php echo $row->work_district; ?>"
            </th>
            <br><br><br>

            <th><a class="title">อำเภอ </a>
              <input class="input" type="text" name="work_aumpua" value="<?php echo $row->work_aumpua; ?>"
            </th><br><br><br>

            <th><a class="title">จังหวัด</a>
              <input class="input" type="text" name="work_province" value="<?php echo $row->work_province; ?>"
            </th>
            <br><br><br>

            <th><a class="title">เบอร์โทรศัพท์ที่ทำงาน</a>
              <input class="input" type="text" name="work_tel" value="<?php echo $row->work_tel; ?>"
            </th>
            <br><br><br>

          </td>
        </tr>
      </div>
      <?php
      }
      ?>
      <br>
      <center>
        <input class="button" name="submit" type="submit" value="บันทึก" />
        <a class="button" href="../seold/Profile">Back to home page</a><br><br>
      </center><br><br>
    </form>          
</body>
</html>