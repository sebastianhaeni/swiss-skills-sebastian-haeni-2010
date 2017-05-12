<?php 
	if($saveWorkWasSuccessful){
		echo "Your work was submitted sucessfully.<br />";
		echo '<a href="competitors.php"> &lt; back to overview</a>';
	} else {
?>
<p>
	<a href="competitors.php">&lt; back to the work overview</a>
</p>
<form name="uploadwork" id="uploadform" method="post" action="uploadwork.php?upload=1" enctype="multipart/form-data" onsubmit="return false";>
	<div id="formerrormessages"></div>
	<p>
		<label for="name">Name*</label><input type="text" name="name" id="name" maxlength="20" /><br />
		<label for="description">Description*</label><textarea name="description" id="description" cols="30" rows="5"></textarea><br />
		<label for="picture">Picture**</label><input type="file" name="picture" id="picture" /><br />
		<input type="submit" value="Submit work" class="submit" onclick="Uploadwork.validate();" />
		<input type="reset" value="Clear" class="reset" />
	</p>
	<p style="margin: 10px;">
		* Required fields<br />
		** Only jpg, png and gif files are allowed.
	</p>
</form>
<?php 
	}
?>