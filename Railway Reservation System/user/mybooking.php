

<?php include('header.php'); 
require '../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{ 
	$train_id=$_POST['train_id'];
    $booking_date=$_POST['booking_date'];	

    session_start();
    $book_by=$_SESSION['name'];

    $query="SELECT * FROM tickets WHERE book_by= '$book_by' and train_id='$train_id' and booking_date = '$booking_date' ";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));


?>
<div class="col-md-12 menu mycss">
        <div class="list-group homelist">
            <a href="../user/train_status.php" class="list-group-item" >← Back</a>
        </div>
</div>

<div class="col-md-12 forminput">
    <table class="table tablebg">
        <tr>
            <th>PNR</th>
            <th>TRAIN ID</th>
            <th>PASSENGER NAME</th>
            <th>Booked Seats</th>
            <th>Booked Status</th>
        </tr>
        <?php 
	while ($row = $result->fetch_assoc()): 

?>
        <tr>
            <td><?php echo $row['pnr'] ?> </td>
            <td><?php echo $row['train_id']?></td>
            <td><?php echo $row['passenger_name']?></td>
            <td><?php echo $row['no_of_seats']?></td>
            <td><?php echo $row['book_status']?></td>

        </tr>
        <?php endwhile; ?>

    </table>


    <?php 
	} else {  
?>

    <script>
    function validate_from() {
        var x = document.forms["train_stat"]["train_id"].value;
        if (x == null || x == "") {
            alert("Enter Train Number");
            return false;
        }

        var x = document.forms["train_stat"]["booking_date"].value;
        if (x == null || x == "") {
            alert("Enter Date of Journey");
            return false;
        }
    }
    </script>

    <div class="col-md-12 menu mycss">
        <div class="list-group homelist">
            <a href="../user/userhome.php" class="list-group-item" >← Back</a>
        </div>
    </div>

    <form name="train_stat" style="margin-top:300px;" class="form-horizontal forminput" action=""
        onsubmit="return validate_from()" method="post">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Train Number</label>
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
            <label for="inputEmail3" class="col-sm-3 control-label">Journey Date</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="inputEmail3" placeholder="Date(YYYY-MM-DD)"
                    name="booking_date">
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