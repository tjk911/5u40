<?php 
$title = '';
$pagefromurl = $_GET['page'];
	if ($pagefromurl == 'henkemeyer'){
		$title = "5 Under 40 | Jamie Henkemeyer";
	} elseif ($pagefromurl == 'moen'){
		$title = '5 Under 40 | Dawn Moen';
	} elseif ($pagefromurl == 'morrighan'){
		$title = '5 Under 40 | Amber Morrighan';
	} elseif ($pagefromurl == 'nelson'){
		$title = '5 Under 40 | Kris Nelson';
	} elseif ($pagefromurl == 'nikodym'){
		$title = '5 Under 40 | Matt Nikodym';
	} elseif ($pagefromurl == 'lund'){
		$title = "5 Under 40 | Betsy Lund";
	} elseif ($pagefromurl == 'pieper'){
		$title = '5 Under 40 | Brad Pieper';
	} elseif ($pagefromurl == 'rice'){
		$title = '5 Under 40 | Chris Rice';
	} elseif ($pagefromurl == 'whipple'){
		$title = '5 Under 40 | Dennis Whipple';
	} elseif ($pagefromurl == 'swanson'){
		$title = '5 Under 40 | John Swanson';
	} else {
		$title = '5 Under 40';
	}
include('header.php'); ?>

<!-- This is where the magic happens, I think -->

<?php
$path = '';
if ($pagefromurl == '') {
$path = "page/home.php";
} else {
$path = "page/".$pagefromurl.".php";
}
include($path);

?>

<?php include('footer.php'); ?>
