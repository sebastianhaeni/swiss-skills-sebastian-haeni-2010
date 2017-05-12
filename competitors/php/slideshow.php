<?php
include("init.php");


$query = query("select * from work");
$works = array();
while($work = fetch_array($query)){
	$works[] = $work;
}

$randomwork = $works[array_rand($works)];


if(!isset($rootPath)){
	$rootPath = "../../";
}

$path = getThumbPath($randomwork['picture'], $rootPath."userfiles/works/", 400);

echo '
	<a href="competitors.php" title="Go to the work overview">
		<img src="userfiles/works/thumb/'.$path.'" alt="Go to the work overview" />
	</a>
';

