<?php
include("init.php");

?>

<div id="uploadbutton">
	<input type="button" onclick="window.location='uploadwork.php';" value="+ Upload your own work" />
</div>


<?php 


$query = query("select * from work order by name");

$count = 0;
while($work = fetch_array($query)){
	$count++;
	$thumbPath = getThumbPath($work['picture'], "../../userfiles/works/");
	echo '
	<div class="workpreview">
		<a href="#detail='.$work['idWork'].'">
			<img src="userfiles/works/thumb/'.$thumbPath.'" alt="'.$work['name'].'" title="'.$work['name'].'" />
		</a>
		<a href="#detail='.$work['idWork'].'">
			<h3>'.$work['name'].'</h3>
		</a>
	</div>
	';
	
	if($count >= 4){
		echo '<div class="clear"></div>';
		$count = 0;
	}
}

?>
<div class="clear"></div>