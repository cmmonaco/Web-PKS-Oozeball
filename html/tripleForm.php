<form id="registration" name="registration" method="POST" action="tripleSub.php" onSubmit="return validate3()" style="margin-left: 20px;">
	<div class="fieldwrapper">
		<label for="teamName" class="styled">Team Name</label>
		<div class="thefield">
			<input size="20" type="text" class="" name="teamName" id="teamName" value="<?=$_SESSION['post']['teamName']?>" />
		</div>
	</div>
	<hr width="50%"/>
	<div class="fieldwrapper">
		<label for="name1" class="styled">Player 1's Name</label>
		<div class="thefield">
			<input size="24" type="text" class="" name="name1" id="name1" value="<?=$_SESSION['post']['name1']?>" />
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="email1" class="styled">Player 1's Email</label>
		<div class="thefield">
			<input size="20" type="text" class="" name="email1" id="email1" value="<?=$_SESSION['post']['email1']?>" />
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="phone1" class="styled">Player 1's Phone</label>
		<div class="thefield">
			<input type="text" class="" name="phone1" id="phone1" value="<?=$_SESSION['post']['phone1']?>" />
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="size1" class="styled">Player 1's Shirt Size</label>
		<div class="thefield">
			<select name="size1" id="size1">
				<option value="" selected="selected">- Choose One -</option>
				<option value="Small">Small</option>
				<option value="Medium">Medium</option>
				<option value="Large">Large</option>
				<option value="X-Large">X-Large</option>
			</select>
		</div>
	</div>
	<hr width="30%"/>
	<div class="fieldwrapper">
		<label for="name2" class="styled">Player 2's Name</label>
		<div class="thefield">
			<input size="24" type="text" class="" name="name2" id="name2" value="<?=$_SESSION['post']['name2']?>" />
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="email2" class="styled">Player 2's Email</label>
		<div class="thefield">
			<input size="20" type="text" class="" name="email2" id="email2" value="<?=$_SESSION['post']['email2']?>" />
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="phone2" class="styled">Player 2's Phone</label>
		<div class="thefield">
			<input type="text" class="" name="phone2" id="phone2" value="<?=$_SESSION['post']['phone2']?>" />
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="size2" class="styled">Player 2's Shirt Size</label>
		<div class="thefield">
			<select name="size2" id="size2">
				<option value="" selected="selected">- Choose One -</option>
				<option value="Small">Small</option>
				<option value="Medium">Medium</option>
				<option value="Large">Large</option>
				<option value="X-Large">X-Large</option>
			</select>
		</div>
	</div>
	<hr width="30%"/>
	<div class="fieldwrapper">
		<label for="name3" class="styled">Player 3's Name</label>
		<div class="thefield">
			<input size="24" type="text" class="" name="name3" id="name3" value="<?=$_SESSION['post']['name3']?>" />
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="email3" class="styled">Player 3's Email</label>
		<div class="thefield">
			<input size="20" type="text" class="" name="email3" id="email3" value="<?=$_SESSION['post']['email3']?>" />
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="phone3" class="styled">Player 3's Phone</label>
		<div class="thefield">
			<input type="text" class="" name="phone3" id="phone3" value="<?=$_SESSION['post']['phone3']?>" />
		</div>
	</div>
	<div class="fieldwrapper">
		<label for="size3" class="styled">Player 3's Shirt Size</label>
		<div class="thefield">
			<select name="size3" id="size3">
				<option value="" selected="selected">- Choose One -</option>
				<option value="Small">Small</option>
				<option value="Medium">Medium</option>
				<option value="Large">Large</option>
				<option value="X-Large">X-Large</option>
			</select>
		</div>
	</div>
	<hr width="50%"/>
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
	<hr width="50%"/>
	<div class="fieldwrapper">
		<label for="captcha" class="styled"id="captcha"><script>document.getElementById("captcha").innerHTML=(n1 + " + " + n2 + " =");</script></label>
		<div class="thefield">
			<input size="4" type="text" class="" name="captcha" id="captcha" />
		</div>
	</div>
	<div class="buttonsdiv">
		<input type="submit" name="button" id="button" value="Submit" />
		<input type="reset" name="button2" id="button2" value="Reset" />
	</div>					
</form>