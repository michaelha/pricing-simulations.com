<?php require_once('header.php'); ?>

<div class="container">
      <a href="../">Back to Home</a>

            <hr>



          <h2>Login</h2>
          <p>Please select an identity to login.</p>
          <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Instructor</a></li>
            <li><a href="#profile" data-toggle="tab">Player</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="home">
              <p><form class="well form-inline">
        <input type="text" class="input-small" placeholder="Email">
        <input type="password" class="input-small" placeholder="Entry Code">
        <label class="checkbox">
          <input type="checkbox"> Remember me
        </label>
        <button type="submit" class="btn">Sign in</button>
      </form></p>
      <p>If you are an instructor and would like to request access please contact Mariano Tappata at <a href="mailto:mariano.tappata@sauder.ubc.ca">mariano.tappata@sauder.ubc.ca</a></p>
            </div>
            <div class="tab-pane fade" id="profile">
              <p><form class="well form-inline">
        <input type="password" class="input-small" placeholder="Entry Code">
        <button type="submit" class="btn">Sign in</button>
      </form></p>
            </div>
                      </div>

        <hr>

 

    </div>

<?php require_once('footer.php'); ?>