<?php

/**
 * Executes a database query 
 * @param $sql
 */
function query($sql){
	$query = mysql_query($sql);
	if(!$query){
		throw new Exception("query '".$sql."' failed");
	}
	return $query;
}

/**
 * 
 * @param $query
 */
function fetch_array($query){
	$array = mysql_fetch_array($query);
	return $array;
}

/**
 * 
 * @param unknown_type $idWork
 */
function getWork($idWork){
	$query = query("select * from work where idWork = '".$idWork."'");
	$array = fetch_array($query);
	return $array;
}


/**
 * 
 * @param work $curr
 */
function getPreviousWork($curr){
	$query = query("select * from work order by name");
	$previous = false;
	while($work = fetch_array($query)){
		if($work == $curr){
			return $previous;
		}
		$previous = $work;
	}
}

/**
 * 
 * @param $curr
 */
function getNextWork($curr){
$query = query("select * from work order by name");
	$thisIsIt = false;
	while($work = fetch_array($query)){
		if($thisIsIt){
			return $work;
		}
		if($work == $curr){
			$thisIsIt = true;
		}
	}
}