<?php require 'includes/config.php';?>
<?php include 'includes/header.php';?>
<?php
//database.php

echo "<h1>Current User Database:</h1> <br />";

$sql = 'SELECT * FROM contact_database';
//config area ends here

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
    while ($row = mysqli_fetch_assoc($result))
    {
       echo "<p>";
       echo "FirstName: <b>" . $row['FirstName'] . "</b><br />";
       echo "LastName: <b>" . $row['LastName'] . "</b><br />";
       echo "Email: <b>" . $row['Email'] . "</b><br />";
	   echo "Favorite Color: <b>" . $row['FavColor'] . "</b><br /><br />";
       echo "</p>";
    }
}else{//no records
    echo '<div align="center">What! No customers?  There must be a mistake!!</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database


/*
//Connect to MySQL, authenticate the MySQL users
$myConn = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

//Connect to the Database, verify authorization to this resource
mysql_select_db(DB_NAME,$myConn);

//Select data to be retrieved via SQL statement
//Retrieve data set (result)
$result = mysql_query($sql,$myConn);



//Loop through the data, and insert it into our page
while($row=mysql_fetch_assoc($result))
{ //pull data from array
    echo "First Name: " . $row['FirstName'] . "<br />";
    echo "Last Name: " . $row['LastName'] . "<br />";
    echo "Email: " . $row['Email'] . "<br />";
    echo "Favorite Color: " . $row['FavColor'] . "<br /><br />";

} 

//Disconnect from MySQL, and release resources 
@mysql_free_result($result); # releases web server memory
@mysql_close($myConn);
*/ 

/*  How to connect to MySQL

Connect to MySQL, authenticate the MySQL users
Connect to the Database, verify authorization to this resource
Select data to be retrieved via SQL statement
Retrieve data set (result)
Loop through the data, and insert it into our page
Disconnect from MySQL, and release resources 

*/
//mysql.php
?>

           <!--end header.php-->
           

		
		<!--start footer.php-->
       
<?php include 'includes/footer.php'?>

