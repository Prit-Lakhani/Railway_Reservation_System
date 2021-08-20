<?php include('header.php'); ?>
<?php
    require '../dbconnect.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$pnr=$_POST['pnr'];
		session_start();
		$book_by=$_SESSION['name'];

		$query="SELECT * FROM tickets WHERE pnr = $pnr and book_by='$book_by'";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($result);

		if(!empty($count))
		{
			

		
				$query="DELETE FROM tickets WHERE pnr='$pnr' and book_by='$book_by'";
				$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
				
				
				?> 
					<div class="col-md-12 menu mycss">
						<div class="list-group homelist">
							<a href="../user/userhome.php" class="list-group-item" >← Back</a>
						</div>
					</div>
				<div align="center" class="col-md-3">
				<table class="table tablebg">
					<tr>
						<td>Your Requested is completed </td>
					</tr>
					<tr>
						<td>Your have cancelled the seat.</td>
					</tr>
				</table>
				</div>

				<?php
				
			}else{
			?> 
				<div class="col-md-12 menu mycss">
					<div class="list-group homelist">
						<a href="../user/userhome.php" class="list-group-item" >← Back</a>
					</div>
				</div>
			<div align="center" class="col-md-9">
				<table class="table tablebg">
					<tr>
						<td>You have enter invalid PNR or Ticket is not Booked by You</td>
					</tr>
					<tr>
						<td>Unable to Cancel.</td>
					</tr>
				</table>
				</div>
			<?php
			}
		}
?>

<?php include('footer.php'); ?>