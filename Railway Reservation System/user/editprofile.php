<?php include('header.php'); ?>

<div style="padding-right: 50px; text-align: right; font-size: 16px; color:lime;">
        <?php 
            session_start();
            echo "Welcome,";
            echo $_SESSION['uid']; ?>
       </div>		 
<div class="col-md-12 menu mycss">

    <div class="list-group homelist">
        <a href="userhome.php" class="list-group-item" >← Back</a>
    </div>

    <div class="list-group homelist">

        <a href="../user/updateprofile.php" class="list-group-item" >Update Details</a>
        <a href="../user/changepass.php" class="list-group-item" >Change Password</a>
        <a href="../user/deleteacc.php" class="list-group-item">Delete Account</a>
    </div>
    <div style="height:50px;">
    </div>
</div>

<div class="footer col-md-12">
      <center><p> &copy All Rights reserved</p></center>
</div>
<?php include('footer.php'); ?>