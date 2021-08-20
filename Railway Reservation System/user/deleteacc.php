<?php include('header.php');
 require '../dbconnect.php';

 if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    session_start();
    $email = $_SESSION['name'];

    $query1 = "DELETE FROM tickets WHERE book_by = '$email'";
    $query = "DELETE FROM user_table WHERE email_id = '$email'";
    $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    if(!empty($result))
	{
		?>
		<div class="col-md-3">
			<table class="table tablebg">
				<tr>
					<td>Account Deleted Successfully</td>
				</tr>
			</table>
		</div>
	<?php header("location:logout.php");
	}
    else
    {
        ?>
        <div class="col-md-3">
            <table class="table tablebg">
                <tr>
                    <td>Account Deletion Failed!..</td>
                </tr>
            </table>
        </div>
    <?php
    
    }
}
?>
    
    <div class="col-md-12 forminput">
        <form style="margin-top:25px;" name="edform" action="" method="post" class="form-horizontal">
            <div class="form-group">
                <label >Are you sure you want to Delete Your Account?</label>
                <div class="col-sm-8">
                    <input type="submit" value="Yes" name="submit">
                    <input type="button" id="inputEmail3" value="No" onclick="window.location.href='userhome.php'">
                </div>
            </div>

        </form>
    </div>

<?php include('../footer.php'); ?>

