<?php
//config.php

include 'includes/credentials.php'; #database credentials
include 'includes/common.php'; #functions



define('THIS_PAGE' ,basename($_SERVER['PHP_SELF']));
//echo THIS_PAGE;
//die;

define('DEBUG',TRUE); #we want to see all errors
/* automatic path settings - use the following 4 path settings for placing all code in one application folder */ 

define('VIRTUAL_PATH', 'http://www.markdaviddesign.com/itc240/fl14/'); # Virtual (web) 'root' of application for images, JS & CSS files

define('PHYSICAL_PATH', '/home/marpfa2/markdaviddesign.com/itc240/fl14/'); # Physical (PHP) 'root' of application for file & upload reference

define('INCLUDE_PATH', PHYSICAL_PATH . 'includes/'); # Path to PHP include files - INSIDE APPLICATION ROOT


date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website

# End Config area --------------------------------
ob_start();  #buffers our page to be prevent header errors. Call before INC files or ANY html!
header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching


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
		$widget = 	randomize($heros);
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




?>