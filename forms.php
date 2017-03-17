<?php include "menu.php"; ?>

<h2>Forms</h2>

<form action="forms.php" method="post">
	
	<label for="country">Choose the country</label>
	<select id="country" name="country">
		<option value="">Choose</option>
		<option value="Finland">Finland</option>
		<option value="Russia">Russia</option>
		<option value="Sweden">Sweden</option>
		<option value="Vietnam">Vietnam</option>

	</select>

<br>
<label for="gender">Choose your gender</label><br>
	<input type="radio" name="gender" value="Male">Male<br>
	<input type="radio" name="gender" value="Female">Female<br>
	<input type="radio" name="gender" value="Non-binary">Non-binary<br>

<br>
<label for="gender">Choose your status</label><br>
		<input type="radio" name="status" value="Student">Student<br>
		<input type="radio" name="status" value="Teacher">Teacher<br>
		<input type="radio" name="status" value="Neet">Neet<br>


	<input type="submit" name="btnSend" value="Send">

</form>

<?php 
	$btn=$_POST['btnSend'];
	if (isset($btn)) {
		$country=$_POST['country'];
		$gender=$_POST['gender'];
		$status=$_POST['status'];
    	echo 'Hello '.$gender. ' ' .$status. ' from '.$country;
	}
 ?>


<?php include "footer.php"; ?>