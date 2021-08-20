<?php include('header.php'); 

require '../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$pnr=$_POST['pnr'];
//	$train_id=$_POST['train_id'];
	
	$query="SELECT * FROM tickets WHERE pnr = '$pnr'";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$count = mysqli_num_rows($result);

	if(empty($count))
	{
		
		?>
		
		<div class="col-md-3">
			<table class="table tablebg">
				<tr>
					<td>Invalid PNR Number.</td>
				</tr>
			</table>
		</div>

	<?php
		}
		else
		{
			while ($row = $result->fetch_assoc()):
				$train_id=$row['train_id'];
			endwhile;
			$msg="OK";
		}
	}
	?>

<script>
function validate_from() {
    var x = document.forms["pnrstat"]["pnr"].value;
    if (x == null || x == "") {
        alert("Enter PNR Number");
        return false;
    }
}
</script>
<div class="col-md-12 menu mycss">
        <div class="list-group homelist">
            <a href="../user/userhome.php" class="list-group-item" >← Back</a>
        </div>
</div>
<div class="col-md-12 forminput">


    <form name="pnrstat" class="form-horizontal action=" onsubmit="return validate_from()" method="post">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">PNR No</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" placeholder="PNR" name="pnr">
				
								
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Submit" name="submit" />
            </div>
        </div>
    </form>
    <br>
    <?php
			if(isset($msg))
			{	
		?>

					<table class="table tablebg">
							<tr>
									<td>
											Status of your tickets ..
									</td>
							</tr>
					</table>

				<table class="table tablebg">

						<tr>
								<td>PNR </td>
								<td>Passenger Name </td>
								<td>No of Seat</td>
								-<td>Status</td>
								<td>Source </td>
								<td>Destination </td>
								<td>Train</td>
								
						</tr>

						<?php 
								

										$query1 = "SELECT * FROM tickets WHERE pnr = '$pnr'";
										$result1 = mysqli_query($conn, $query) or die(mysqli_error($conn));
										//$number = $result1['train_id'];
										while ($row1 = $result1->fetch_assoc()):
											?>
											<tr>
												<td><?php echo $pnr;?></td>
												<td><?php echo $row1['passenger_name'];?></td>
												<td><?php echo $row1['no_of_seats']?></td>
												<td><?php echo $row1['book_status']?></td>
											<?php											
										endwhile;
										
										$query = "SELECT * FROM trains WHERE train_id = '$train_id'";
										$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
										while ($row = $result->fetch_assoc()):
											?>
												<td><?php echo $row['source_stn'];?></td>
												<td><?php echo $row['destination_stn'];?></td>
												<td><?php echo $row['train_name'];?></td>
											</tr>
											<?php
										endwhile;

										?>
						<tr>
								
								
								
								<td><?php echo $row1['no_of_seats']?></td>
								<td><?php echo $row1['train_status']?></td>
						</tr>

				</table>

			<?php } ?>

</div>                           
</div>
</div>
<?php include('../footer.php'); ?>