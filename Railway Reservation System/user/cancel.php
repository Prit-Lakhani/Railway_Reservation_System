<?php include('header.php'); ?>
				<script>
				function validate_from() {
						var x = document.forms["pncncl"]["pnr"].value;
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
				<form  name="pncncl" action="Ccancel.php" onsubmit="return validate_from()" method="post" class="form-horizontal">
				
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">PNR number</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" id="inputEmail3" placeholder="pnr no." name="pnr">
					</div>
				  <br>
				  <br>
				  <div class="form-group">
				  
					<div class="col-sm-offset-3 col-sm-8">
					  <input type="submit" name="submit" value="Submit">
					</div>
				  </div>
				</form>
				
			  </div>
			</div>
		</div>
<?php include('../footer.php'); ?>
 

       