<?php include('header.php');
 require '../dbconnect.php';

 if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $pname=$_POST['pname'];
    $date=$_POST['date'];
    $seat_no=$_POST['seat_no'];
    $train_no=$_POST['train_no'];
} 

?>

<script>
function validate_from() {
    var x = document.forms["adform"]["pname"].value;
    if (x == null || x == "") {
        alert("Enter your name");
        return false;
    }
	x = document.forms["adform"]["date"].value;
    if (x == null || x == "") {
        alert("Enter Date(YYYY=MM=DD)");
        return false;
	}
    x = document.forms["adform"]["seat_no"].value;
    if (x == null || x == "") {
        alert("Enter seat_no no.");
        return false;
    }
    x = document.forms["adform"]["train_no"].value;
    if (x == null || x == "") {
        alert("Select Train for Journey");
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
	<form style="margin-top:25px;" name="adform" action="tickets.php" onsubmit="return validate_from()" method="post"
			class="form-horizontal">
			<div class="form-group">
					<label class="col-sm-3 control-label">Passenger Name</label>
					<div class="col-sm-8">
							<input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="pname">
					</div>
			</div>
			<div class="form-group">
					<label class="col-sm-3 control-label">Booking Date</label>

					<div class="col-sm-8">
					  <input type="date" class="form-control" id="inputdate3" placeholder="date : 2016-10-01" name="date" min=<?php echo date('Y-m-d')?> value=<?php echo date('Y-m-d')?>>
					</div>
			</div>
			<div class="form-group">
					<label class="col-sm-3 control-label">Number of seats</label>
					
					<div class="col-sm-8">
							<input type="number" class="form-control" id="inputEmail3" placeholder="Number of seat_no" name="seat_no" min="1" max="50" value="1">
					</div>
			</div>
			<div class="form-group">
					<label class="col-sm-3 control-label" for="sel1">Select Train Name</label>
					<div class="col-sm-8">
							<select class="form-control forminp selectform" id="sel1" name="train_no">
									<option value="">Select train Name ....</option>

									<?php

										$query = "SELECT train_id,train_name FROM  trains";
										$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
										
										while ($row = $result->fetch_assoc()):
									?>

									<option value="<?php echo $row['train_id']; ?>"><?php echo $row['train_name'];?></option>
		
									<?php endwhile; ?>

							</select>
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

