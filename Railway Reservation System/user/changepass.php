<?php include('header.php');
 require '../dbconnect.php';

 if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    session_start();
    $email = $_SESSION['name'];
    $password=$_POST['oldpassword'];
    $newpassword=$_POST['newpassword'];
    
    $query = "UPDATE user_table SET password = '$newpassword' WHERE email_id = '$email' and password='$password'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    if(!empty($result))
	{
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
            var x=document.forms["edform"]["oldpassword"].value;
            if(x==null || x=="")
            {
                alert("Enter your Old Password");
                return false;
            }
            x=document.forms["edform"]["newpassword"].value;
            x1=document.forms["edform"]["cnfpassword"].value;
            if(x==null || x=="")
            {
                alert("Enter New Password");
                return false;
            }
            if(x1==null || x1=="")
            {
                alert("Enter Confirm New Password");
                return false;
            }
            if(x!=x1)
            {
                alert("New Password Mis-Match");
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
	<form style="margin-top:25px;" name="edform" action="" onsubmit="return validate_from()" method="POST" class="form-horizontal">
        <div class="form-group">
            <label  class="col-sm-3 control-label">Old Password</label>
            <div class="col-sm-8">
                 
                <input type="password" class="form-control" id="inputEmail3" placeholder="Old Password" name="oldpassword">
            </div>
        </div>

        <div class="form-group">
            <label  class="col-sm-3 control-label">New Password</label>
            <div class="col-sm-8">
                 
                <input type="password" class="form-control" id="inputEmail3" placeholder="New Password" name="newpassword">
            </div>
        </div>

        <div class="form-group">
            <label  class="col-sm-3 control-label">Confirm New Password</label>
            <div class="col-sm-8">
                 
                <input type="password" class="form-control" id="inputEmail3" placeholder="Confirm New Password" name="cnfpassword">
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

