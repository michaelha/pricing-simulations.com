<?php require_once('header.php'); ?>

<div class="container">

<h2>Hosting a Game</h2><p> &nbsp;</p><p> &nbsp;</p>

<form class="form-horizontal">
		<h3>Supply Parameters</h3> <p> &nbsp;</p>
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="select01">Number of Groups</label>
            <div class="controls">
              <select class="span1" id="select01">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>               
              </select>
            </div>
          </div>
        
			<div class="control-group">
			<label class="control-label" for="appendedPrependedInput">Hotel's Marginal Cost</label>
			<div class="controls">
			<div class="input-prepend input-append">
			<span class="add-on">$</span><input class="span1" id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span>
			</div>
			</div>
			</div>
			
			<div class="control-group">
			<label class="control-label" for="appendedPrependedInput">Hotel's Fixed Cost</label>
			<div class="controls">
			<div class="input-prepend input-append">
			<span class="add-on">$</span><input class="span1" id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span>
			</div>
			</div>
			</div>
			
			<div class="control-group">
			<label class="control-label" for="appendedPrependedInput">Hotel's Capacity</label>
			<div class="controls">
			<div class="input-prepend input-append">
			<input class="span1" id="appendedPrependedInput" size="16" type="text">

			</div>
			</div>
			</div>			
			
          
          
          
			<div class="control-group">
			<label class="control-label" for="appendedPrependedInput">Fee charged by Expedia</label>
			<div class="controls">
			<div class="input-prepend input-append">
			<span class="add-on">$</span><input class="span1" id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span>
			</div>
			</div>
			</div>
			
			
			
			
			<div class="control-group">
			<label class="control-label" for="appendedPrependedInput">Fee charged by Priceline</label>
			<div class="controls">
			<div class="input-prepend input-append">
			<span class="add-on">$</span><input class="span1" id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span>
			</div>
			</div>
			</div>       
          
          <h3>Demand Parameters</h3>
          <p> &nbsp;</p>

			<div class="control-group">
			<label class="control-label" for="appendedPrependedInput">Low Season: Lower Bound</label>
			<div class="controls">
			<div class="input-append">
			<input class="span1" id="appendedPrependedInput" size="16" type="text"><span class="add-on">%</span>
			</div>
			</div>
			</div>

			<div class="control-group">
			<label class="control-label" for="appendedPrependedInput">Low Season: Upper Bound</label>
			<div class="controls">
			<div class="input-append">
			<input class="span1" id="appendedPrependedInput" size="16" type="text"><span class="add-on">%</span>
			</div>
			</div>
			</div>
			
			<div class="control-group">
			<label class="control-label" for="appendedPrependedInput">High Season: Lower Bound</label>
			<div class="controls">
			<div class="input-append">
			<input class="span1" id="appendedPrependedInput" size="16" type="text"><span class="add-on">%</span>
			</div>
			</div>
			</div>

			<div class="control-group">
			<label class="control-label" for="appendedPrependedInput">High Season: Upper Bound</label>
			<div class="controls">
			<div class="input-append">
			<input class="span1" id="appendedPrependedInput" size="16" type="text"><span class="add-on">%</span>
			</div>
			</div>
			</div>
			

			
		<h3>Game Info</h3>

             <p> &nbsp;</p>
      
      <div class="control-group">
            <label class="control-label">Game Type</label>
            <div class="controls">
              <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                Option 1: Simple Pricing
              </label>
              <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Option 2: Opaque and Transparent Pricing
              </label>
            </div>
          </div>
      
      <div class="control-group">
			<label class="control-label" for="appendedPrependedInput">Number of Rounds</label>
			<div class="controls">
			<div class="input-prepend input-append">
			<input class="span1" id="appendedPrependedInput" size="16" type="text">

			</div>
			</div>
			</div>
      
       <div class="control-group">
       <label class="control-label" for="dp1">Deadline</label>
       <div class="controls">
      <div class="input-append date" id="dp1" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
  <input class="span2" size="16" type="text" value="12-02-2012">
  <span class="add-on"><i class="icon-th"></i></span>
  </div>
</div>
      </div>
      
      
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Host a game</button>
            <button class="btn" >Cancel</button>
          </div>
        </fieldset>
      </form>

</div> <!-- /container -->

<?php require_once('footer.php'); ?>