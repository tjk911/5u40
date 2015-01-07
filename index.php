<?php include('header.php'); ?>
  <div class="row" style="margin-top:0px !important; padding-top:0px !important;">
    <h1>2015 Times Media 5 Under 40 Award recipients</h1>
    <div class="large-2 push-1 columns">
      <div>
        <img class="kai" src="http://www.placecage.com/400/400">
      </div>
    </div>
    <div class="large-2 push-1 columns">
      <img src="http://www.placecage.com/400/400">
    </div>
    <div class="large-2 push-1 columns">
      <img src="http://www.placecage.com/400/400">
    </div>
    <div class="large-2 push-1 columns">
      <img src="http://www.placecage.com/400/400">
    </div>
    <div class="large-2 pull-1 columns">
      <img src="http://www.placecage.com/400/400">
    </div>
  </div>
<!--   <div class="row" style="margin-top:0px !important; padding-top:0px !important;">

  </div> -->
  <div class="row shadow">
    <div class="large-12 columns">
      <h1>Business’ best list hits 50 in 10th year of 5 Under 40</h1>
      <h4>Young leaders spearhead innovation, work in new markets and serve the community</h4>
      <p>For 10 years, Times Media has asked Central Minnesotans to nominate its top business leaders under 40 years old.</p>

      <p>When the first class was announced in 2005, this year’s group was just out of college and taking the first steps in careers that have already brought them into important positions.</p>

      <p>One is a small business owner and chair of the board for the St. Cloud Area Chamber of Commerce. Two work in finance, including a principal for one of the area’s most prominent accounting firms and a financial adviser with more than $100 million in assets under management. And two work to make a difference for nonprofits, including the manager of a large family counseling center and a program specialist battling childhood obesity.</p>

      <p>The 2015 5 Under 40 winners are Jamie Henkemeyer, Dawn Moen, Amber Morrighan, Kris Nelson and Matt Nikodym. Their names are added to a list that now includes 50 people recognized as shaping the future of business in the area. They all got there by being leaders in their field, spearheading innovation, working in new or emerging markets and serving in the community.</p>

      <p>“It’s our way of contributing to the growth and development of our future leaders,” Times Publisher Melinda Vonderahe said in a statement. “The individuals that receive this award will be the ones that ensure Central Minnesota continues to thrive and prosper for generations to come. By recognizing these leadership traits and characteristics, it helps to reinforce the behavior, retain these people in our marketplace and encourage more of this proactive generosity of time and talent in our region. It’s also to thank them for everything they do.”</p>
    </div>
  </div>

  <div class="row shadow">
    <div class="large-12 medium-12 columns">
      <h4>Past recipients</h4>
           <?php
		   $counter = 1;
            $file = fopen("recipients.txt", "r");
            //Output a line of the file until the end is reached
            $currentyear = "";
            $firstyear = true;
            while(! feof($file))
            {
              $readarr = fgets($file);
              $readarr = explode('|',$readarr);
              $year = $readarr[0];
              $schoolname = $readarr[1];
              $pageurl = $readarr[2];
			  
			  
			  if ($counter == 1) {
			      echo " <div class='row'>";
			  }
              
              if (($firstyear != true) && ($currentyear != $year)) {
                  echo "</ul></div></div>";	  
				  if ($counter == 4) {
					echo "</div>";
					echo " <div class='row'>";				  
				  }	  
              }
			  
              if ($currentyear != $year) {
                  echo "<div class='large-4 medium-4 columns left'>";
                  echo "<div class='callout panel'>";
                  echo "<h4 style='text-align:left;'>".$year."</h4>";
                  echo "<ul style='text-align:left;'>";
                  $currentyear = $year;
                  $firstyear = false;
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

<?php include('footer.php'); ?>

