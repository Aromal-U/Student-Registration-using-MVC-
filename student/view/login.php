<?php
  include "header.php";
  include_once "../controller/student_regaction.php";
  include('../config/connection.php');
  $conn = new PDO($dsn, $username, $password, $options);
  if(isset($_POST['submit'])){
    $uname=$_POST['user_name'];
    $psw=$_POST['password'];
    $conn=new student_controller();
    $conn->login_data($uname,$psw);
  }
?>
<div class="row">
   <div class="stdregg">
   <form action="" method="post">
    <h1>   Login </h1>
Username:	<input type="text" name="user_name" class="frm" placeholder="User Name"><br><br>
Password:	<input type="text" name="password" class="frm" placeholder="Password"><br><br>
	<input type="submit" name="submit" class="frm-btn" value="Log In">
	<input type="submit" name="reset" class="frm-btn" value="Reset"><br>
	<a href="forgot_password.php"> Forgot Password </a>
   </form>
</div>
</div>
<?php 
   include "footer.php";
?>