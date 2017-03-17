<?php include "menu.php"; ?>
<h2>Add Customers</h2>
<form action="customers.php" method="post">
	<label for="fn">Firstname</label><br>
		<input type="text" name="fn" id="fn" required=""><br>

	<label for="ln">Lastname</label><br>
		<input type="text" name="ln" id="ln" required=""><br>

	<label for="ad">Street Address</label><br>
		<input type="text" name="ad" id="ad"><br>

		<input type="submit" name="btnAdd" value="Add">

</form>


<?php include "footer.php"; ?>