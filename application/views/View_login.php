<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SE Alumni website login</title>
    <link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/login.css"> 
</head>
<body>
<form action="../seold/Check_Login" method="POST">
    <h1>Log in</h1><br>
    <input type="text" placeholder="รหัสนักศึกษา" name="se_studenid" class="input-studentid">
    <input type="password" placeholder="password" name="se_password" class="input-password" id="input-password">
  <br><br><br><br>
  <input type="submit" name="login" value="Login">
  <div class="back-login">
    <a class="button" href="../seold/index">Back to home page</a><br><br>
  </div>
</form>
</body>
</html>