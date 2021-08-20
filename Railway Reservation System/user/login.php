<?php include('header1.php'); ?>

<?php 

include("../dbconnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
		session_start();
		$_SESSION['sid'] = session_id();
		
		
    $email = $_POST['email_id'];
    $password = $_POST['password'];
		
    $query = "SELECT * FROM `user_table` WHERE email_id='$email' and password='$password'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($result);

    while ($row = $result->fetch_assoc()):
			$_SESSION['uid'] = $row['fullname'];
			$_SESSION['name'] = $row['email_id'];
		endwhile;
    if($count>0) 
    {
			 
	
        header("location: userhome.php");
    }
    else
    {
        echo "Invalid Username and/or password";
    }    
}

?>
    <script>
      function validate_from()
      {
        var x=document.forms["login"]["email_id"].value;
				if(x==null || x=="")
				{
					alert("Enter your Email ID");
					return false;
				}

				x=document.forms["login"]["password"].value;
				if(x==null || x=="")
				{
					alert("Enter Password");
					return false;
				}
      }
    </script>
 
			  <div class="col-md-12 forminput">
			  
				
				<form name="login" class="form-horizontal" onsubmit="return validate_from()" method="post" action="">
				  <div class="form-group">
					<label  class="col-sm-3 control-label">Email ID</label>
					<div class="col-sm-8">
					  <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email_id">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-sm-3 control-label">Password</label>
					<div class="col-sm-8">
					  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
					</div>
				  </div>
				 
				  <div class="form-group">
					<div class="col-sm-offset-3 col-sm-8">
					  <a><input type="submit" value="LOGIN" name="form_login" /></a>
					</div>
				  </div>
				</form>
				
			  </div>
			</div>
      <div style="height:250px;">
     </div>
      <div class="footer col-md-12">
					<center><p> &copy All Rights reserved</p></center>
		</div>
		</div>
    
<?php include('footer.php'); ?>
 

       