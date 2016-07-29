<?php
include("header.php");
include("db.php");
?>
<div class="container">
<form method="post" action="mails.php">
<fieldset>
	<legend>Send us a message</legend>
	<!-- <div class="container"> -->
	<div class="form">
		<label for="from">From</label><br>
		<label for="to">To</label><br>
		<label for="message">Message</label><br>	
	</div>
	<div class="form">
		<input id="from" type="email" name="from"><br>
		<input id="to" type="email" name="to"><br>
		<textarea id="message" name="message" rows="8" cols="100"></textarea><br>
		<button type="submit">Submit</button>
	</div>
</fieldset>	
</form>

</div>
<?php
include("footer.php");
?>