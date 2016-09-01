      <!-- Latest Projects -->
<div class="container wrapper content" id="latest-projects-wrapper">
    <div class="grid" id="latest-projects">
      <!-- Example row of columns -->

      <div class="row">
      	<div class="col-md-12"><h2>Heading</h2></div>
      </div>
      <div class="row">
        <div id="col1" class="col-md-4">
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div id="col2" class="col-md-4">
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div id="col3" class="col-md-4">
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>
   
      <div class="row">
      <div class="col-md-12">
          <h1>Latest Projects</h1> 
         <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Project Title</th>
                <th>Avg. Bid</th>
                <th>Time Left</th>
              </tr>
            </thead>
            <tbody>
		<?php /*function presDateTimeFormat($days, $hours, $minutes, $seconds){
            if($days > 0) 
              {$timediff = $days.' days';} else { $timediff = '';}
            if($hours > 0 && $days == 0) 
              {$timediff .= $hours.' hours';} else {$timediff .= '';}
            if($minutes > 0 && $days == 0 && $hours == 0) 
              {$timediff .= $minutes.' minutes';} else {echo '';}
            if($seconds > 0 && $minutes == 0 && $days == 0 && $hours == 0) 
              {$timediff .= $seconds.' days';} else {echo '';}
              return $timediff; 
        } ?>
                <?php foreach($lp as $row) : ?>
                <tr>
                <td><a href="#"><?php echo $row->project_name; ?></a></td>
                <td>$<?php echo $row->budget_max; ?></td>
                <td><?php echo presDateTimeFormat($row->days, $row->hours, $row->minutes, $row->seconds); ?></td>
                </tr>
              <?php endforeach; */?>
            </tbody>
          </table>
      </div> 
      <!--<div class="col-md-4">
              <h1>Top 10 Agents</h1>
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>RockStar[%]</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
      </div>-->
      </div>   
</div
></div>     

<hr>

     
    
 

     