<?php include('header.php'); 
	require '../dbconnect.php';


	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{ 
		$train_id=$_POST['train_id']; 


			$query="SELECT * FROM trains WHERE train_id= '$train_id'";
			$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

?>
    <div class="col-md-12 menu mycss">
        <div class="list-group homelist">
            <a href="../user/view_schedule.php" class="list-group-item" >← Back</a>
        </div>
    </div>

<div class="col-md-12 forminput">
    <table class="table tablebg">
        <tr>
            <th>Train ID</th>
            <th>Train Name</th>
            <th>Train Type</th>
            <th>Source Station</th>
            <th>Destination Station</th>
        </tr>

        <?php	while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['train_id'] ?> </td>
            <td><?php echo $row['train_name'] ?> </td>
            <td><?php echo $row['train_type']?></td>
            <td><?php echo $row['source_stn']?></td>
            <td><?php echo $row['destination_stn']?></td>
        </tr>
        <?php endwhile; ?>
    </table>


    <table class="table tablebg">
        <h2 style="color:#fff;">Train Schedule</h2>
        <tr>
            <th>stop number</th>
            <th>Station ID</th>
            <th>Station Name</th>
            <th>Arrival Time</th>
            <th>Departure Time</th>
        </tr>

        <?php 
					$query = "SELECT * FROM routes WHERE train_id= '$train_id'";
					$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

					while ($row = $result->fetch_assoc()):
				?>
        <tr>
            <td><?php echo $row['stop_number'] ?> </td>
            <td><?php echo $row['station_id'] ?> </td>
            <td><?php echo $row['station_name'] ?> </td>
            <td><?php echo $row['arrival_time'] ?> </td>
            <td><?php echo $row['departure_time'] ?> </td>
        </tr>


        <?php 
					 endwhile;
	}
	else {  
					?>
    </table>
    <br>
    <br>

    <script>
    function validate_from() {
        var x = document.forms["view_sch"]["train_id"].value;
        if (x == null || x == "") {
            alert("Select your Train");
            return false;
        }
    }
    </script>

    <div class="col-md-12 menu mycss">
        <div class="list-group homelist">
            <a href="../user/userhome.php" class="list-group-item" >← Back</a>
        </div>
    </div>

    <form name="view_sch" style="margin-top:200px;" class="form-horizontal forminput" onsubmit="return validate_from()" action="" method="post">
    

        <div class="form-group">
            <label class="col-sm-3 control-label" for="sel1">Select Train Name</label>
            <div class="col-sm-8">
                <select class="form-control forminp" id="sel1" name="train_id">
                    <option value="">Select train Name ....</option>

                    <?php

									$query = "SELECT * FROM  trains";
									$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
									while ($row = $result->fetch_assoc()):
							?>
                    <option value="<?php echo $row['train_id']; ?>"><?php echo $row['train_name'];?></option>
                    <?php	endwhile;	?>

                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10">
                <input type="submit" value="Submit" name="submit" />
            </div>
        </div>
    </form>
    <?php } ?>
</div>
</div>
</div>

<?php include('footer.php'); ?>