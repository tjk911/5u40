<?php 
$title = '';
$pagefromurl = $_GET['page'];
	if ($pagefromurl == 'albany'){
		$title = " | Albany getting used to tougher competition";
	} elseif ($pagefromurl == 'annandale'){
		$title = ' | Young Cardinals to be tested early';
	} elseif ($pagefromurl == 'becker'){
		$title = ' | Becker doubling down at QB this season';
	} elseif ($pagefromurl == 'cathedral'){
		$title = ' | Spaniol steps into big shoes at Cathedral';
	} elseif ($pagefromurl == 'cover'){
		$title = ' | Last chance';
	} elseif ($pagefromurl == 'evw'){
		$title = " | EV-W's Streit lends hand on, off field";
	} elseif ($pagefromurl == 'foley'){
		$title = ' | Foley looking toward bigger things';
	} elseif ($pagefromurl == 'holdingford'){
		$title = ' | Huskers looking to raise the bar after CMC title in 2013';
	} elseif ($pagefromurl == 'kimball'){
		$title = ' | New coach bringing humor, hard work';
	} elseif ($pagefromurl == 'littlefalls'){
		$title = ' | Flyers switch up their running game';
	} elseif ($pagefromurl == 'melrose'){
		$title = ' | Dutchmen enjoy new field this season';
	} elseif ($pagefromurl == 'milaca'){
		$title = ' | New coach, new start for Wolves';
	} elseif ($pagefromurl == 'paynesville'){
		$title = ' | QB Quade back to lead upstart Paynesville';
	} elseif ($pagefromurl == 'pierz'){
		$title = ' | Pierz adapting to defensive scheme change';
	} elseif ($pagefromurl == 'rocori'){
		$title = ' | Spartans hope to have more fun';
	} elseif ($pagefromurl == 'royalton'){
		$title = ' | Young Royals to rely on speed, defense';
	} elseif ($pagefromurl == 'sartell'){
		$title = ' | Focused Sabres have experience, talent';
	} elseif ($pagefromurl == 'saukcentre'){
		$title = ' | Mainstreeters bringing receiver back to QB';
	} elseif ($pagefromurl == 'saukrapids'){
		$title = ' | Storm ready to GRIND it out';
	} elseif ($pagefromurl == 'stcloudapollo'){
		$title = ' | Benny, Jets hoping for an encore';
	} elseif ($pagefromurl == 'stcloudtech'){
		$title = ' | Tech expecting to surprise';
	} elseif ($pagefromurl == 'us'){
		$title = ' | Patriots set sights on return to state';
	}
include('header.php'); ?>

<!-- This is where the magic happens, I think -->

<?php

$pagefromurl = $_GET['page'];
$path = "page/".$pagefromurl.".php";
include($path);

?>

<?php include('footer.php'); ?>
