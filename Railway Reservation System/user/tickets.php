<?php include('header.php'); 
require '../dbconnect.php';

if(isset($_POST['submit']))
{
	

	$pname=$_POST['pname'];
	$seat_no=$_POST['seat_no'];
	$date=$_POST['date'];
	$date = date($date);
	$train_no=$_POST['train_no'];
	$train_status = 'confirm';
	
	$query="SELECT booked_seats,available_seats FROM train_status WHERE train_id = '$train_no'";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	while ($row = $result->fetch_assoc()):
			$book_count = $row['booked_seats'];
			$available_count = $row['available_seats'];
	endwhile;
  //$count = $result->fetch()['available_seats'];
	?>
	<div class="col-md-12 menu mycss">
        <div class="list-group homelist">
            <a href="../user/userhome.php" class="list-group-item" >← Back</a>
        </div>
	</div>
	<?php
	if($available_count > $seat_no) 
	{
		$available_count = $available_count - $seat_no;
		$book_count = $book_count + $seat_no;
		$random=str_shuffle("012345678915975369740582198745632109632587410756489156324");
		$pnr=substr($random,0,6);
		

		$query="UPDATE train_status SET available_seats='$available_count',booked_seats='$book_count' WHERE train_id='$train_no' AND booking_date = '$date'";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		session_start();
		$book_by = $_SESSION['name'];

		$query1="INSERT INTO tickets (pnr,book_by,passenger_name,train_id,no_of_seats,book_status,booking_date) VALUES ('$pnr','$book_by','$pname','$train_no','$seat_no','$train_status','$date')";
    $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		?>
		<div align="center" class="col-md-3">
		<table class="table tablebg">
			<tr>
				<td>Your Requested is completed </td>
			</tr>
			<tr>
				<td>You have booked : <?php echo $seat_no ;?> seats.</td>
			</tr>
			<tr>
				<td>Your PNR is : <?php echo $pnr ;?></td>
			</tr>
		</table>
		</div>
		<?php


	} else 

	{

	?>
	<div align="center" class="col-md-5">
		<table class="table tablebg">
			<tr>
				<td>Unable to book Desired Number of seats</td>
			</tr>
			<tr>
				<td>Available Seats : <?php echo $available_count ;?> seats.</td>
			</tr>
		</table>
	</div>
	<?php
	}

}		
?>
			 
			  <div class="col-md-12 forminput">
			  </div>
			</div>
		</div>
<?php include('../footer.php'); ?>
 

       