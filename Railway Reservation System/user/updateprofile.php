<?php include('header.php');
 require '../dbconnect.php';

 if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    session_start();
    $email=$_SESSION['name'];
    setcookie("emailid",$email);
    
    $fullname=$_POST['fullname'];
    $mobile=$_POST['mobile'];
    $city=$_POST['city'];
    $state=$_POST['state'];

    
    $query = "UPDATE user_table SET fullname = '$fullname' , mobile = '$mobile' , city = '$city' , state = '$state' WHERE email_id = '$email'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    if(!empty($result))
	{
        session_abort();
		?>
		<div class="col-md-3">
			<table class="table tablebg">
				<tr>
					<td>Update Successful</td>
				</tr>
			</table>
		</div>
	<?php
	}
    else
    {
        ?>
        <div class="col-md-3">
            <table class="table tablebg">
                <tr>
                    <td>Update Failed!..</td>
                </tr>
            </table>
        </div>
    <?php
    
    }
}
	//header("location:userhome.php");

?>

    <script>
        function validate_from()
        {
            var x=document.forms["edform"]["fullname"].value;
            if(x==null || x=="")
            {
                alert("Enter your Full Name");
                return false;
            }

            x=document.forms["edform"]["mobile"].value;
            if(x==null || x=="")
            {
                alert("Enter Mobile number");
                return false;
            }

            x=document.forms["edform"]["city"].value;
            if(x==null || x=="")
            {
                alert("Enter City");
                return false;
            }

            x=document.forms["edform"]["state"].value;
            if(x==null || x=="")
            {
                alert("Enter State");
                return false;
            }
        }
    </script>

    <div class="col-md-12 menu mycss">
            <div class="list-group homelist">
                <a href="../user/editprofile.php" class="list-group-item" >← Back</a>
            </div>
    </div>

<div class="col-md-12 forminput">
	<form style="margin-top:25px;" name="edform" action="" onsubmit="return validate_from()" method="post" class="form-horizontal">
        <div class="form-group">
            <label  class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-8">
                 <?php
					session_start();
                    $email = $_SESSION['name'];
                    
                    $query = "SELECT fullname FROM user_table where email_id='$email'";
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    while ($row = $result->fetch_assoc()):   
                ?>
                <input type="text" class="form-control" id="inputEmail3" placeholder="Full Name" name="fullname" value="<?php echo $row['fullname']; ?>">
                <?php endwhile; ?>
            </div>
        </div>

         <div class="form-group">
            <label class="col-sm-3 control-label">Phone Number</label>
            <div class="col-sm-8">
                <?php
                    $query = "SELECT mobile FROM user_table where email_id='$email'";
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    
                    while ($row = $result->fetch_assoc()):
                ?>
                <input class="form-control" type="tel" pattern="^\d{10}$" required name="mobile" placeholder="(format: 10 Digits)" value="<?php echo $row['mobile']; ?>">
                <?php endwhile; ?>
            </div>
        </div>

        <div class="form-group">
            <label  class="col-sm-3 control-label">City</label>
            <div class="col-sm-8">
                <?php
                    $query = "SELECT city FROM  user_table where email_id='$email'";
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    
                    while ($row = $result->fetch_assoc()):
                ?>  
                <input type="text" class="form-control" id="inputEmail3" placeholder="City" name="city" value="<?php echo $row['city']; ?>">
                <?php endwhile; ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">State</label>
            <div class="col-sm-8">
                <?php
                    $query = "SELECT state FROM  user_table where email_id='$email'";
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    
                    while ($row = $result->fetch_assoc()):
                ?>
                <input type="text" class="form-control" id="inputEmail3" placeholder="State" name="state" value="<?php echo $row['state']; ?>">
                <?php endwhile; ?>
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
</div>

<?php include('../footer.php'); ?>

