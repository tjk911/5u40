<?php include('header.php'); ?>

  <div class="row" style="max-width:100%; margin-top: 0px; padding-top:0px;" >
    <section id="cover" style="height:80vh;">
        <div class="bcg" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#cover">
          <div class="hsContainer">
                <div class="hsContent" data-center="bottom: 200px; opacity: 1" data-top="bottom: 1200px; opacity: 0" data-anchor-target="#cover h3">
                <h1 class="textwhite">High School Football '14</h1>
              </div>
          </div>
        </div>
    </section>
  </div>
  <div class="row shadow">
    <div class="large-12 columns">
      <h1>BIG TITLE</h1>
    </div>
  </div>

  <div class="row shadow">
    <div class="large-12 medium-12 columns">
      <h5>See what’s ahead this season for 21 Central Minnesota high school football teams.</h5>
      <div class="row">
           <?php
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
              
              if (($firstconf != true) && ($currentconf != $conf)) {
                  echo "</ul></div></div>";
              }
              if ($currentconf != $conf) {
                  echo "<div class='large-4 medium-4 columns left'>";
                  echo "<div class='callout panel'>";
                  echo "<h5>".$conf."</h5>";
                  echo "<ul>";
                  $currentconf = $conf;
                  $firstconf = false;
              }
              echo "<li><a href='page.php?page=".$pageurl."'>".$schoolname."</a></li>"; 
            }
            echo "</ul></div></div>";
            fclose($file);        
          ?> 
      </div>







        <!-- <div class="large-4 medium-4 columns">
          <div class="callout panel">
            <h5>Central Lakes Conference</h5>
            <ul>
              <li><i class="fa fa-graduation-cap"></i><a href="">Rocori</a></li>
              <li><a href="">St. Cloud Tech</a></li>
              <li><a href="">St. Cloud Apollo</a></li>
              <li><a href="">Sartell</a></li>
              <li><a href="">Sauk Rapids</a></li>
            </ul>
          </div>
        </div>
        <div class="large-4 medium-4 columns">
          <div class="callout panel">
            <h5>Granite Ridge Conference</h5>
            <ul>
              <li><a href="">St. Cloud Cathedral</a></li>
              <li><a href="">Albany</a></li>
              <li><a href="">Foley</a></li>
              <li><a href="">Little Falls</a></li>
              <li><a href="">Milaca</a></li>
              <li><a href="">Becker</a></li>
            </ul>
          </div>
        </div>
        <div class="large-4 medium-4 columns">
          <div class="callout panel">
            <h5>West Central Conference</h5>
            <ul>
              <li><a href="">Paynesville</a></li>
              <li><a href="">Sauk Centre</a></li>
              <li><a href="">Melrose</a></li>
            </ul>
          </div>
        </div>
      </div> -->
      <!-- <div class="row">
        <div class="large-4 medium-4 columns">
          <div class="callout panel">
            <h5>Central Minnesota Conference</h5>
            <ul>
              <li><a href="">Sth</a></li>
              <li><a href="">Sth</a></li>
              <li><a href="">Sth</a></li>
              <li><a href="">Sth</a></li>
            </ul>
          </div>
        </div>
        <div class="large-4 medium-4 columns">
          <div class="callout panel">
            <h5>Prairie South Conference</h5>
            <ul>
              <li><a href="">Sth</a></li>
              <li><a href="">Sth</a></li>
              <li><a href="">Sth</a></li>
              <li><a href="">Sth</a></li>
            </ul>
          </div>
        </div>
        <div class="large-4 medium-4 columns">
          <div class="callout panel">
            <h5>Wright County Conference</h5>
            <ul>
              <li><a href="">Sth</a></li>
              <li><a href="">Sth</a></li>
              <li><a href="">Sth</a></li>
              <li><a href="">Sth</a></li>
            </ul>
          </div>
        </div>
      </div> -->
    </div>
  </div>
  <hr />

<?php include('footer.php'); ?>

