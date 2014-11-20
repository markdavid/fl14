<?php require 'includes/config.php';?>
<?php include 'includes/header.php';?>
<?php
//form 2

if(isset($_POST['first_name']))
{//if there is data show it
	//echo $_POST['FirstName'];

	$message = process_post ();

	safeEmail('mpfaff01@seattlecentral.edu','test_subject',$message);
	echo '<br > Thank you for your message!';
	
}else{//show the form
	
	echo '
	<form action="contact.php" method="post"><br />
	<legend><h1>Contact Us</h1></legend>
	<br />
	First Name:<input type="text" name="first_name" required="required" />
	<br />
	Email:<input type="email" name="email" required="required" placeholder="youremail@example.com" />
	<br />
	comments:<textarea name ="comments"></textarea>
	<input type="submit">
	</form>
	';
}
?>

           <!--end header.php-->
           

		
		<!--start footer.php-->
       
<?php include 'includes/footer.php'?>

