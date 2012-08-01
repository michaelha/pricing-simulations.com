<?php require_once('header.php'); ?>
/* test1 */
<div class="container">
<a href="../">Back to Home</a>
<hr>

<h3>Instructor Mode</h3>

<hr>

 <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#screen1" data-toggle="tab">Instructions</a></li>
            <li><a href="#screen2" data-toggle="tab">Create a Game</a></li>
            <li><a href="#screen3" data-toggle="tab">Monitor an Existing Game</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="screen1">
              <p><h4>Instructions</h4></p>
      <p>If you are an instructor and would like to request access please contact Mariano Tappata at <a href="mailto:mariano.tappata@sauder.ubc.ca">mariano.tappata@sauder.ubc.ca</a></p>
            </div>
            <div class="tab-pane fade" id="screen2">
              <p><a href="create_game.php">Create a Game</a></p>
            </div>
            
                       <div class="tab-pane fade" id="screen3">
              
              <table class="table">
        <thead>
          <tr>
            <th>Game ID</th>
            <th>Number of Rounds</th>
            <th>Time Remaining</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>3124</td>
            <td>4</td>
            <td>4 Hours 23 Minutes</td>
            <td><a href="#">View Details</a></td>
          </tr>
          <tr>
            <td>2512</td>
            <td>2</td>
            <td>2 Days</td>
            <td><a href="#">View Details</a></td>
          </tr>
          <tr>
            <td>3312</td>
            <td>4</td>
            <td>5 Days</td>
            <td><a href="#">View Details</a></td>
          </tr>
        </tbody>
      </table>
              
              
            </div>
                      </div>


<hr>
</div> <!-- /container -->

<?php require_once('footer.php'); ?>
