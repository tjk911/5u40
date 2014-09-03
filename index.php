<?php include('header.php'); ?>

<div class="show-for-touch">
  <div class="row mobilephoto mcover">
    <h1 class="mcoverwhite"><b>Prep Football '14</b></h1>
  </div>
</div>
<div class="row bigphoto cover hide-for-touch">
  <div class="backgroundoverlay">
    <h1 class="coverwhite"><b>Prep Football '14</b></h1>
  </div>
</div>
  <div class="row shadow">
    <div class="large-12 columns">
      <div class="large-5 columns right">
        <img src="assets/cover/cover3.jpg" style="border: solid 1px gray; margin-bottom:10px;">
      </div>
      <h1>Last chance</h1>
      <h4>District scheduling ends conference familiarity for football fans</h4>
      <p>For as long as anyone can remember, the preseason goals for most high school football programs were the same. And they usually started with winning a conference title.</p>
      <p>That was job one and it will soon be out the window. This season will be the last time anyone can win a conference title in Minnesota for the foreseeable future.</p>
      <a class="button radius " href="page.php?page=cover">Click here to read the story</a>
    </div>
  </div>

  <div class="row shadow">
    <div class="large-12 medium-12 columns">
      <h4>See what’s ahead this season for 21 Central Minnesota high school football teams.</h4>
           <?php
		   $counter = 1;
            $file = fopen("teamindex.txt", "r");
            //Output a line of the file until the end is reached
            $currentconf = "";
            $firstconf = true;
            while(! feof($file))
            {
              $readarr = fgets($file);
              $readarr = explode('|',$readarr);
              $conf = $readarr[0];
              $schoolname = $readarr[1];
              $pageurl = $readarr[2];
			  
			  
			  if ($counter == 1) {
			      echo " <div class='row'>";
			  }
              
              if (($firstconf != true) && ($currentconf != $conf)) {
                  echo "</ul></div></div>";	  
				  if ($counter == 4) {
					echo "</div>";
					echo " <div class='row'>";				  
				  }	  
              }
			  
              if ($currentconf != $conf) {
                  echo "<div class='large-4 medium-4 columns left'>";
                  echo "<div class='callout panel'>";
                  echo "<h4 style='text-align:left;'>".$conf."</h4>";
                  echo "<ul style='text-align:left;'>";
                  $currentconf = $conf;
                  $firstconf = false;
				  $counter++;
              }
              echo "<li><a href='page.php?page=".$pageurl."'>".$schoolname."</a></li>"; 			  
            }
            echo "</ul></div></div>";
            fclose($file);        
          ?> 
      </div>
    </div>
  </div>
  <hr />
  <?php include('schedule.php');?>
  <div class="hide-for-touch">
    <div class="row bigphoto end">
    </div>    
  </div>
  <div class="show-for-touch">
    <div class="row mobilephoto">
      <img src="assets/kimball/kimball2.jpg">
    </div>
  </div>
<?php include('footer.php'); ?>

