<?php include('header.php'); ?>

			  <div class="col-md-12 menu mycss">
			
						<div class="list-group homelist">
				<?php 
						session_start();
						if($_SESSION['sid']==session_id())
						{
							
				    ?>
						<div style="padding-right: 50px; text-align: right; font-size: 16px; color:lime;">
							<?php 

								echo "Welcome,";
								echo $_SESSION['uid'];
								//echo $_SESSION['name']; ?>
						</div>

			  <a href="../user/view_schedule.php" class="list-group-item" >View Schedule</a>
			  <a href="../user/mybooking.php" class="list-group-item" >My Booking</a>
			  <a href="../user/trains_between_stations.php" class="list-group-item">Train Between Stations</a>
			  <a href="../user/book.php"class="list-group-item">Book Ticket</a>
			  <a href="../user/PNR.php"class="list-group-item">PNR Status</a>
			  <a href="../user/cancel.php"class="list-group-item">Cancel Ticket</a>
			  <a href="../user/editprofile.php"class="list-group-item">Edit Profile</a>
			  <a href="../user/logout.php"class="list-group-item">Logout</a>
				<?php 
				     	}
						else
						{
							header("location:login.php");
						}
					?>
			</div>
			<div style="height:50px;">
     	</div>
		</div>
		
		<div class="footer col-md-12">
					<center><p> &copy All Rights reserved</p></center>
		</div>
<?php include('footer.php'); ?>
 

       