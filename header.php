<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Times' <?php echo htmlspecialchars($title);?></title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="css/grid.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
  	<div id="page-wrap">
	<div class="fixed-custom">
	  <nav class="top-bar backgroundtop" data-topbar>
	    <ul class="title-area">
	      <li class="name hide-for-small">
	        <h1><a href="http://www.sctimes.com">SCTimes</a></h1>
	      </li>
	      <li class="name show-for-small">
	        <h1><a href="http://www.sctimesapps.com/projects/5under40/">5 Under 40</a></h1>
	      </li>
	       <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	      <li class="toggle-topbar menu-icon"><a href="javascript:void(0)"><span></span></a></li>
	    </ul>

	    <section class="top-bar-section">
	    	<!-- Left Nav Section -->
	    	<ul class="left hide-for-small">
	    	  <li><a href="http://www.sctimesapps.com/projects/5under40/">5 Under 40</a></li>
	    	</ul>
	      <!-- Right Nav Section -->
	      <ul class="right">
	        <!-- <li><a href="page.php?page=cover">Cover Story</a></li> -->
	        <li class="has-dropdown">
	          	<a href="javascript:void(0)">Recipients</a>
	          	<ul class="dropdown">
				  <?php
				  $file = fopen("recipients.txt", "r");
					//Output a line of the file until the end is reached
					$currentyear = "";
					$firstyear = true;
					while(! feof($file))
					{
						$readarr = fgets($file);
						$readarr = explode('|',$readarr);
						$year = $readarr[0];
						$recipientname = $readarr[1];
						$pageurl = $readarr[2];
						
						if (($firstyear != true) && ($currentyear != $year)) {
								echo "</ul></li>";
						}
						if ($currentyear != $year) {
								echo "<li class='has-dropdown'>";
								echo "<a href='javascript:void(0)'>".$year."</a>";
								echo "<ul class='dropdown'>";
								$currentyear = $year;
								$firstyear = false;
						}

						if ($year > 2012) {
						  echo "<li><a href='page.php?page=".$pageurl."'>".$recipientname."</a></li>";
						} else {
						  echo "<li><a href='javascript:void(0)'>".$recipientname."</a></li>";
						}
						// echo "<li><a href='page.php?page=".$pageurl."'>".$recipientname."</a></li>";	
					}
					echo "</ul></li>";
					fclose($file);			  
				  ?>
	          	</ul>
	        </li>
	      </ul>
	    </section>
	  </nav>
	</div>

	<section id="main-content" style="padding-top:60px;">
	<div id="guts">
		<iframe scrolling="no" height="1" width="1" frameborder="0" src="omniture.php?pagetitle=<?php echo $title; ?>" style="position:absolute;left:-5000px;"></iframe>