

<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
	$email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpass = $_POST['confirmpass'];
        $date = $dt->format('Y-m-d');
 
        $query = "INSERT * INTO `perteners`  VALUES ('','$username','$email', '$password', '$confirmpass','$date";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>
 <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
