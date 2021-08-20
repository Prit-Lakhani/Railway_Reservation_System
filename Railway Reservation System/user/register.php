<?php include('header1.php');
 require '../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email_id=$_POST['email_id'];
    $password=$_POST['password'];
    $fullname=$_POST['fullname'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $mobile=$_POST['mobile'];
    $city=$_POST['city'];
		$state=$_POST['state'];
		
		$query = "select * from user_table where email_id='$email_id'";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($result);
		if($count == 1)
		{
		?>
		<div align="center" class="col-md-3">
		<table class="table tablebg">
			<tr>
				<td><?php echo "Account Already Exsit"; ?> </td>
			</tr>
		</table>
		</div>
		<?php
			//echo "Account Already Exsit";
		}
		else
		{
		$sql="INSERT INTO `user_table` (`email_id`,`password`,`fullname`,`gender`,`age`,`mobile`,`city`,`state`) VALUES ('$email_id','$password','$fullname','$gender','$age','$mobile','$city','$state')";
		if ($conn->query($sql) === TRUE) {
			echo "Account Created";
			header("location:login.php");
		} 
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
		
} 
$conn->close();
?>

			<script>
			function validate_from()
			{
				var x=document.forms["adform"]["fullname"].value;
				if(x==null || x=="")
				{
					alert("Enter your Full Name");
					return false;
				}

				var x=document.forms["adform"]["email_id"].value;
				if(x==null || x=="")
				{
					alert("Enter your Email ID");
					return false;
				}

				x=document.forms["adform"]["password"].value;
				x1=document.forms["adform"]["password1"].value;
				if(x==null || x=="")
				{
					alert("Enter Password");
					return false;
				}
				if(x!=x1)
				{
					alert("Password Mis-Match");
					return false;
				}

				x=document.forms["adform"]["age"].value;
				if(x==null || x=="")
				{
					alert("Enter Age");
					return false;
				}

				x=document.forms["adform"]["mobile"].value;
				if(x==null || x=="")
				{
					alert("Enter Mobile number");
					return false;
				}

				x=document.forms["adform"]["city"].value;
				if(x==null || x=="")
				{
					alert("Enter City");
					return false;
				}

				x=document.forms["adform"]["state"].value;
				if(x==null || x=="")
				{
					alert("Enter State");
					return false;
				}
			}
		</script>
			 
			  <div class="col-md-12 forminput">
				<form name="adform" action="" onsubmit="return validate_from()" method="post" class="form-horizontal" >
				<div class="form-group">

					<label  class="col-sm-3 control-label">Full Name</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" id="inputEmail3" placeholder="Full Name" name="fullname">
					</div>
				  </div>

				  <div class="form-group">
					<label  class="col-sm-3 control-label">Email ID</label>
					<div class="col-sm-8">
					  <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email_id">
					</div>
				  </div>

				  <div class="form-group">
					<label  class="col-sm-3 control-label">Password</label>
					<div class="col-sm-8">
					  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
					</div>
				  </div>

				  <div class="form-group">
					<label  class="col-sm-3 control-label">Confirm Password</label>
					<div class="col-sm-8">
					  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password1">
					</div>
				  </div>

				  <div class="form-group">
					<label  class="col-sm-3 control-label">Gender</label>
					<div class="col-sm-8">
					  <input type="radio"  id="male" placeholder="Gender" name="gender" value="male">&nbsp;Male
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio"  id="female" placeholder="Gender" name="gender" value="female">&nbsp;Female
					</div>
				  </div>

				  <div class="form-group">
					<label  class="col-sm-3 control-label">Age</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" id="inputEmail3" placeholder="Age" name="age">
					</div>
				  </div>

				  <div class="form-group">
					<label class="col-sm-3 control-label">Phone Number</label>
					<div class="col-sm-8">
					  <input class="form-control" type="tel" pattern="^\d{10}$" required name="mobile" placeholder="(format: 10 Digits)" >
					</div>
				  </div>

				  <div class="form-group">
					<label  class="col-sm-3 control-label">City</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" id="inputEmail3" placeholder="City" name="city">
					</div>
				  </div>

				  <div class="form-group">
					<label class="col-sm-3 control-label">State</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" id="inputEmail3" placeholder="State" name="state">
					</div>
				  </div>
				 
				  <div class="form-group">
					<div class="col-sm-offset-3 col-sm-10">
					  <a><input type="submit" value="Submit" name="submit" /></a>
					</div>
				  </div>
				</form>
				
			  </div>
			</div>
      <div class="footer col-md-12">
					<center><p> &copy All Rights reserved</p></center>
		</div>
		</div>
<?php include('../footer.php'); ?>
 

       