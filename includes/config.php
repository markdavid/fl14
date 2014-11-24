<?php
//config.php

include 'includes/credentials.php'; #database credentials

define('THIS_PAGE' ,basename($_SERVER['PHP_SELF']));
//echo THIS_PAGE;
//die;
define('DEBUG',TRUE); #we want to see all errors

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website

# End Config area --------------------------------
ob_start();  #buffers our page to be prevent header errors. Call before INC files or ANY html!
header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching

include 'includes/random_rotate.php';

$title = THIS_PAGE; //fallback unique title - see title tag in header.php
if(DEBUG)
{# When debugging, show all errors & warnings
	ini_set('error_reporting', E_ALL | E_STRICT);  
}else{# zero will hide everything except fatal errors
	ini_set('error_reporting', 0);  
} 

$nav1 ['index.php']="Home";
$nav1 ['contact.php']="Contact";
$nav1 ['gallery.php']="Gallery";
$nav1 ['blog.php']="Blog";
$nav1 ['feedback.php']="Feedback";
$nav1 ['database.php']="Database";
$nav1 ['movies.php']="Movie Collection";



/*echo '<pre>';
var_dump(makeLinks($nav1));
echo '</pre>';
die;*/

switch (THIS_PAGE)
{
	
	case 'index.php';
		$title = "Home Title Tag";
		break;
	case 'contact.php';
		$title = "Contact Title Tag";
		break;
	case 'gallery.php';
		$title = "Gallery Title Tag";
		break;	
	case 'blog.php';
		$title = "Blog Title Tag";
		$widget = 	
		  $heros[] = '<img src="images/coulson.png" />';
		  $heros[] = '<img src="images/fury.png" />';
		  $heros[] = '<img src="images/hulk.png" />';
		  $heros[] = '<img src="images/thor.png" />';
		  $heros[] = '<img src="images/black-widow.png" />';
		  $heros[] = '<img src="images/captain-america.png" />';
		  $heros[] = '<img src="images/machine.png" />';
		  $heros[] = '<img src="images/iron-man.png" />';
		  $heros[] = '<img src="images/loki.png" />';
		  $heros[] = '<img src="images/giant.png" />';
		  $heros[] = '<img src="images/hawkeye.png" />';
		  echo randomize($heros);
		  echo '
		  <h3>Random SuperHero</h3>
		  <p>Uses <b>randomize()</b> function and an array named <b>$heros</b> to 
		  display a random hero icon on page reloads.</p>
		  <p> </p>
		  <p>The hero icons come from <a href="http://icongal.com/gallery/iconset/2503/avengers_superhero_avatar" target="_blank">here</a></p>';
		break;	
	case 'feedback.php';
		$title = "Feedback Title Tag";
		break;	
	case 'database.php';
		$title = "Database Title Tag";
		break;	
	case 'movies.php';
		$title = "Movie Collection Title Tag";
		$widget = 	
		  $heros[] = '<img src="images/coulson.png" />';
		  $heros[] = '<img src="images/fury.png" />';
		  $heros[] = '<img src="images/hulk.png" />';
		  $heros[] = '<img src="images/thor.png" />';
		  $heros[] = '<img src="images/black-widow.png" />';
		  $heros[] = '<img src="images/captain-america.png" />';
		  $heros[] = '<img src="images/machine.png" />';
		  $heros[] = '<img src="images/iron-man.png" />';
		  $heros[] = '<img src="images/loki.png" />';
		  $heros[] = '<img src="images/giant.png" />';
		  $heros[] = '<img src="images/hawkeye.png" />';
		  echo randomize($heros);
		  echo '
		  <h3>Random SuperHero</h3>
		  <p>Uses <b>randomize()</b> function and an array named <b>$heros</b> to 
		  display a random hero icon on page reloads.</p>
		  <p> </p>
		  <p>The hero icons come from <a href="http://icongal.com/gallery/iconset/2503/avengers_superhero_avatar" target="_blank">here</a></p>';
		break;			
	default:
		$title = "Default Title Tag";
		$banner = "Site Banner";
}

function makeLinks ($nav)
{
	$myReturn="";
	foreach($nav as $url => $label) 
	{
		
		 if($url == THIS_PAGE) 
		 {//current page, add class
		 $myReturn .= '<li><a class="current" href="' . $url . '">"' . $label . '"</a></li>';
		}else{//no class
		
		 $myReturn .= '<li><a href="' . $url . '">"' . $label . '"</a></li>';
		 
		}
		
		}
		
		return $myReturn;
	}
	
	 /*How to use function below:
	$today = date("Y-m-d H:i:s");
	$to = 'mpfaff01@seattlecentral.edu';
	$replyTo='markdpfaff@gmail.com';
	$subject = 'Test Email, No ReplyTo: ' . $today;
	$message = 'Test';
	
	safeEmail($to, $subject, $message, $replyTo='');*/

function safeEmail($to, $subject, $message, $replyTo='')
{#builds and sends a safe email, using Reply-To properly!

	$fromDomain = $_SERVER["SERVER_NAME"];
	$fromAddress = "noreply@" . $fromDomain; //form always submits from domain where form resides
	if($replyTo==''){$replyTo='';}
	$headers = 'From: ' . $fromAddress . PHP_EOL .
	'Reply-To: ' . $replyTo . PHP_EOL .
	'X-Mailer: PHP/' . phpversion();
	return mail($to, $subject, $message, $headers);

}
	
function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
} 

function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
        echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
        die();
    }
}


 

/**
 * Wrapper function for processing data pulled from db
 *
 * Forward slashes are added to MySQL data upon entry to prevent SQL errors.  
 * Using our dbOut() function allows us to encapsulate the most common functions for removing  
 * slashes with the PHP stripslashes() function, plus the trim() function to remove spaces.
 *
 * Later, we can add to this function sitewide, as new requirements or vulnerabilities develop.
 *
 * @param string $str data as pulled from MySQL
 * @return $str data cleaned of slashes, spaces around string, etc.
 * @see dbIn()
 * @todo none
 */
function dbOut($str)
{
	if($str!=""){$str = stripslashes(trim($str));}//strip out slashes entered for SQL safety
	return $str;
} #End dbOut()

?>