<form id="regisrtation" name="registration" method="POST" action="singleSub.php" onsubmit="return validate1()">
	<div class="fieldwrapper">
		<label for="name" class="styled">Player's Name</label>
		<div class="thefield">
			<input size="24" type="text" class="" name="name" id="name" value="<?=$_SESSION['post']['name']?>" />
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="email" class="styled">Email</label>
		<div class="thefield">
			<input size="20" type="text" class="" name="email" id="email" value="<?=$_SESSION['post']['email']?>" />
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="phone" class="styled">Phone</label>
		<div class="thefield">
			<input type="text" class="" name="phone" id="phone" value="<?=$_SESSION['post']['phone']?>" />
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="size" class="styled">Shirt Size</label>
		<div class="thefield">
			<select name="size" id="size">
				<option value="" selected="selected">- Choose One -</option>
				<option value="Small">Small</option>
				<option value="Medium">Medium</option>
				<option value="Large">Large</option>
				<option value="X-Large">X-Large</option>
			</select>
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="day" class="styled">Day of Attendance</label>
		<div class="thefield">
			<select name="day" id="day">
				<option value="" selected="selected">- Choose One -</option>
				<option value="Open">Open</option>
				<option value="House">House, Brothers Only</option>
			</select>
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="time" class="styled">Preferred Start Time</label>
		<div class="thefield">
			<select name="time" id="time">
				<option value="" selected="selected">- Choose One -</option>
				<option value="10am">10 am</option>
				<option value="1pm">1 pm</option>
				<option value="4pm">4 pm</option>
			</select>
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="payment" class="styled">Expected Method of Payment</label>
		<div class="thefield">
			<select name="payment" id="payment">
				<option value="" selected="selected">- Choose One -</option>
				<option value="cash">Cash</option>
				<option value="credit">Credit</option>
				<option value="buzzcard">Buzzcard</option>
				<option value="Omegafi">Omegafi</option>
			</select>
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="captcha" class="styled" id="captcha"><script>document.getElementById("captcha").innerHTML=(n1 + " + " + n2 + " =");</script></label>
		<div class="thefield">
			<input size="4" type="text" class="" name="captcha" id="captcha" />
		</div>
	</div>
	<div class="buttonsdiv">
		<input type="submit" name="button" id="button" value="Submit" />
		<input type="reset" name="button2" id="button2" value="Reset" />
	</div>					
</form>