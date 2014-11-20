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
	<form action="contact.php" method="post">
	<legend>Feedback</legend>
	<label>First Name</label>
	<input type="text" name="first_name" required="required" />
	<br />
	<label>Email</label>
	<input type="email" name="email" required="required" placeholder="youremail@example.com" />
	<p><label class="comments">Rate Your Web Site Enjoyment:</label>
	<input type="radio" name="enjoyment" value="bad">Bad 
	</p>
	<p>
	<input type="radio" name="enjoyment" value="fair">Fair
	</p>
	<p>
	<input type="radio" name="enjoyment" value="good">Good
	</p>
	<label class="comments">What Pages Do You Like?</label>
	<p><input type="checkbox" name="page[]" value="contact" />Contact
	</p>
	<p>
	<input type="checkbox" name="page[]" value="gallery"  />Gallery
	</p>
	<p>
	<input type="checkbox" name="page[]" value="blog" />Blog
	</p>
	<p>
	<label>Describe your experience in one word:</label>
	<input type="text" name="oneword" />
	</p>
	<p>
	<label>What\'s your favorite color?:</label>
	<input type="text" name="oneword" />
	
	</p>
	<p>
	<label class="comments">Comments</label>
	<textarea name="comments" id="comments" rows="10"></textarea>
	</p>
	<input type="submit">
	</form>
	';
}
?>

           <!--end header.php-->
           

		
		<!--start footer.php-->
       
<?php include 'includes/footer.php'?>

