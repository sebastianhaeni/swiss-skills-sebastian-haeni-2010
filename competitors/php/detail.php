<?php
include("init.php");

$work = getWork($_GET['id']);

echo '<a href="#"> &lt; back to overview</a>';
echo "<h2>".$work['name']."</h2>";
$thumbPath = getThumbPath($work['picture'], "../../userfiles/works/",600);

$previousWork = getPreviousWork($work);
$nextWork = getNextWork($work);

echo '
<div id="workdisplay">
	<div id="previouswork">
		';
		if(is_array($previousWork)){
			echo '<a href="#detail='.$previousWork['idWork'].'">&lt;</a>';
		}
		echo '
		&nbsp;
	</div>
	<div id="workscreenshot">
		<img src="userfiles/works/thumb/'.$thumbPath.'" alt="'.$work['name'].'" title="'.$work['name'].'" />
	</div>
	<div id="nextwork">&nbsp;
		';
		if(is_array($nextWork)){
			echo '<a href="#detail='.$nextWork['idWork'].'">&gt;</a>';
		}
		echo '
	</div>
	<div class="clear"></div>
</div>';

echo '<h3>Description</h3>';
if(empty($work['description'])){
	echo "[no description]";
} else {
	echo $work['description'];
}
?>

<h3>Comments</h3>
<div id="commententries"></div>

<div id="commentformcontainer">
	<h4>Write your own comment</h4>
	<form id="commentform" method="get" action="competitors/php/saveComment.php" onsubmit="return false;">
		<div id="formerrormessages"></div>
		<p>
			<label for="name">Your Name*</label><input type="text" name="name" id="name" maxlength="20" /><br />
			<label for="email">Your E-Mail*</label><input type="text" name="email" id="email" maxlength="30" /><br />
			<label for="message">Message*</label><textarea name="message" id="message" cols="30" rows="5"></textarea><br />
			<input type="submit" value="Submit comment" class="submit" onclick="Comment.submit();" />
			<input type="reset" value="Clear" class="reset" />
		</p>
	</form>
</div>