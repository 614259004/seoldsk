<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alumni profile</title>
    <link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/profilecode.css">
</head>
<body>
<?php
  foreach($AM as $row){
  ?>
  <center><h2>ข้อมูลส่วนตัว</h2></center>
    <div class="container">
      <tr>
        <td>
            <th>
              <a class="title">รหัสนักศึกษา 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->se_studentid;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ชื่อ 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->se_name;?></a>
              </a>
            </th>
            <br><br>
          
            <th>
              <a class="title">นามสุกล 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->se_lastname;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">เบอร์โทรศัพท์
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->se_tel;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ความถนัด
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->se_skill;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">Facebook 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->se_facebook;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">E-mail 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->se_email;?></a>
              </a>
            </th>
            <br><br>

            <h2> ข้อมูลที่ทำงาน </h2>

            <th>
              <a class="title">ชื่อบริษัท 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->work_name;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">เลขที่
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->work_lakete;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">หมู่
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->work_mu;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ตำบล
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->work_district;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">อำเภอ
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->work_aumpua;?></a>
              </a>
            </th>
            <br><br>
            <th>
              <a class="title">จังหวัด
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->work_province;?></a>
              </a>
            </th>
            <br><br>
            <th>
              <a class="title">เบอร์โทรศัพท์
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->work_tel;?></a>
              </a>
            </th>
            <br><br>
        </td>
      </tr>
      <a class="button" href="../seold/showall">ย้อนกลับ</a>
    </div>
  <?php
  }
  ?>
</body>
</html>