<?php
/**
 * demo_list.php along with demo_view.php provides a sample web application
 *
 * this app is contingent upon the  installation and proper 
 * configuration of the nmMini package (config-mini.php) or equivalent
 * 
 * @package nmListView
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 3.0 2012/11/14
 * @link http://www.newmanix.com/
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see demo_view.php
 * @todo none
 */

require 'includes/config.php'; #provides configuration, pathing, error handling, db credentials 
 
# SQL statement
$sql = "select MovieName, MovieID, Price from test_Movie";

//#Fills <title> tag  
//$title = 'Muffins made with love & PHP in Seattle';

# END CONFIG AREA ---------------------------------------------------------- 

include 'includes/header.php'; #header must appear before any HTML is printed by PHP
?>
<h3 align="center"><?=THIS_PAGE;?></h3>

<p>This page shows a list of my favorite Movies</p>
<?php

# connection comes first in mysqli (improved) function

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if(mysqli_num_rows($result) > 0)
{#records exist - process
	while($row = mysqli_fetch_assoc($result))
	{# process each row
         echo '<div align="center"><a href="movie_view.php?id=' . (int)$row['MovieID'] . '">' . dbOut($row['MovieName']) . '</a>';
         echo ' <i>only</i> <font color="red">$' . number_format((float)$row['Price'],2)  . '</font></div>';
 
	} 
}else{#no records
    echo "<div align=center>What! No Movies?  There must be a mistake!!</div>";	
}
@mysqli_free_result($result);

include 'includes/footer.php';
?>
