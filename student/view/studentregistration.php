

<?php
 //
 //
  include "header.php";
  include_once "../controller/student_regaction.php";

  if(isset($_POST['submit'])){
    $Reg_no=$_POST['Reg_no'];
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $Mobile=$_POST['Mobile'];
	$Dept_name=$_POST['Dept_name'];
    $Course_name=$_POST['Course_name'];
	$Password=$_POST['Password'];
    $Email=$_POST['Email'];
    $Name=$_POST['Name'];
	$Sem_no=$_POST['Sem_no'];
    $Years=$_POST['Years'];
    
    
    
    $con=new student_controller();
    $con->save_data($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years);
  }
?>
<div class="row">
  <div class="login" style="text-align: center;">
   <form action="" method="post" >
   <div class="stdreg">
    <h1>   Student Registration </h1>
Registration Number:	<input type="text" name="Reg_no" class="frm" placeholder="Registration Number"> <br>
First Name:	<input type="text" name="Fname" class="frm" placeholder="First Name"> <br>
Last Name:	<input type="text" name="Lname" class="frm" placeholder="Last Name"> <br>
Mobile Number:	<input type="text" name="Mobile" class="frm" placeholder="Mobile"> <br>
Department_name	<select name="Dept_name" class="frm"> 
        <option>select</option>
		<option value="bca">BCA</option>
        <option value="mca">MCA</option>
        <option value="btech"> B.Tech</option>
        <option value="mtech"> M.Tech</option>
        <option value="phd"> PHD</option>
    </select> <br>
	
Course name:	<select name="Course_name" class="frm">
        <option>select</option>
		<option value="cse">CSE</option>
        <option value="eee">EEE</option>
        <option value="ece">ECE</option>
        <option value="aero">AERO</option>
        <option value="it"> IT</option>
    </select><br>
	
Password:	<input type="text" name="Password" class="frm" placeholder="Password"> <br>
Confirm Password:	<input type="text" name="cpassword" class="frm" placeholder="Confirm Password"><br>
Email:	<input type="text" name="Email" class="frm" placeholder="Email"><br>
User Name: 	<input type="text" name="Name" class="frm" placeholder="User Name"> <br>
	
Semester:	<select name="Sem_no" class="frm">
        <option>select</option>
		<option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5"> 5</option>
        <option value="5"> 6</option>
        <option value="5"> 7</option>
        <option value="5"> 8</option>
    </select> <br>
	
	
	 
Date:	<input type="date" name="Years" class="frm"> <br>
	
	
	
	
	<input type="submit" name="submit" class="frm-btn" value="Registration">
	<input type="submit" name="reset" class="frm-btn" value="Reset"><br>
	<a href="forgot_password.php"> Forgot Password </a>
	</div>
   </form>
 </div>
</div>



<?php
   include "footer.php";
?>
