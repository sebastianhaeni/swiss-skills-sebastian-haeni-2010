<?php
include("init.php");

$idWork = $_GET['idWork'];

$query = query("select * from comment where idWork = '".$idWork."' order by createdate");
$count = 0;
while($comment = fetch_array($query)){
	$count++;
	echo '
		<div class="commententry">
			<div class="authorinfo">
				'.$comment['author_name'].'<br />
				'.date("d.m.Y H:i",$comment['createdate']).'
			</div>
			<div class="commentmessage">
				'.$comment['message'].'
			</div>
			<div class="clear"></div>
		</div>
	';
}

if($count == 0){
	echo "[no comments]";
}

?>