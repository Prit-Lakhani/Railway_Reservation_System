<?php include('header.php');
        require '../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
		$source_stn=$_POST['source_stn'];
    $destination_stn=$_POST['destination_stn'];	
    	 
    $querys = "SELECT * FROM routes WHERE station_id='$source_stn'";
    $results = mysqli_query($conn, $querys) or die(mysqli_error($conn));

    $queryd = "SELECT * FROM routes WHERE station_id='$destination_stn'";
    $resultd = mysqli_query($conn, $queryd) or die(mysqli_error($conn));
        
?>
<div class="col-md-12 menu mycss">
        <div class="list-group homelist">
            <a href="../user/trains_between_stations.php" class="list-group-item" >← Back</a>
        </div>
</div>
<div class="col-md-12 forminput">
    <table class="table tablebg">
        <tr>
            <th>Train ID</th>
            <th>Train Name</th>
            <th>Train Type</th>
            <th>Source Depature Time</th>
            <th>Destination Arrival Time</th>
        </tr>

            <?php 						
                while ($rows = $results->fetch_assoc()):
                    $source_train_id = $rows['train_id'];
                    $source_stop_number = $rows['stop_number'];
                    $source_departure_time = $rows['departure_time'];

                    $resultd = mysqli_query($conn, $queryd) or die(mysqli_error($conn));
                    while ($rowd = $resultd->fetch_assoc()):
                        $destination_train_id = $rowd['train_id'];
                        $destination_stop_number = $rowd['stop_number'];
                        $destination_arrival_time = $rowd['arrival_time'];

                        if($source_train_id == $destination_train_id &&  $source_stop_number < $destination_stop_number)
                        { 
                            $query = "SELECT * FROM trains WHERE train_id='$source_train_id'";
                            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                            while ($row = $result->fetch_assoc()):
			?>
        <tr>
            <td><?php echo $row['train_id'] ?></td>
            <td><?php echo $row['train_name'] ?></td>
            <td><?php echo $row['train_type'] ?></td>
            <td><?php echo $rows['departure_time'] ?></td>
            <td><?php echo $rowd['arrival_time'] ?></td>
        </tr>
        <?php               endwhile;
                        } 
                    endwhile;
                endwhile; ?>
    </table>

    <?php 
} 
else {  
?>
    <div class="col-md-12 menu mycss">
        <div class="list-group homelist">
            <a href="../user/userhome.php" class="list-group-item" >← Back</a>
        </div>
    </div>
    <form class="form-horizontal" style="margin-top:300px;" action="" method="post">
        <div class="form-group">
            <label class="col-sm-2 for=" sel1">Source Station</label>
            <div class="col-sm-7">
                <select class="form-control forminp" id="sel1" name="source_stn">
                    <option value="">Select Station ....</option>

                    <?php

									$query="SELECT * FROM  station";
									$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
									while ($row = $result->fetch_assoc()):
								?>
                    <option value="<?php echo $row['station_id']; ?>"><?php echo $row['station_name'];?></option>
                    <?php
									endwhile;
								?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 for=" sel1">Destination Station</label>
            <div class="col-sm-7">
                <select class="form-control forminp" id="sel1" name="destination_stn">
                    <option value="">Select Station ....</option>

                    <?php

									$query="SELECT * FROM  station";
									$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
									while ($row = $result->fetch_assoc()):
								?>
                    <option value="<?php echo $row['station_id']; ?>"><?php echo $row['station_name'];?>
                    </option>
                    <?php
									endwhile;
								?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10">
                <a><input type="submit" value="Submit" name="submit" /></a>
            </div>
        </div>
    </form>
    <?php  } ?>
</div>
</div>
</div>
<?php include('../footer.php'); ?>