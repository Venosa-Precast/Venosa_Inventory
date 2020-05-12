<?php

require('connect.php');

//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
//if (isset($_GET['q'])) {
	//$q = intval($_GET['q']);
	$array = array();
	//$sqlstatement = "SELECT DISTINCT(Description) FROM materials WHERE Description LIKE '%{$query}%'";
	//$sqlstatement = "SELECT DISTINCT(Description) FROM materials WHERE Description LIKE '%$q%'";
	$sqlstatement = "SELECT DISTINCT(Description) FROM materials WHERE 1 ORDER BY Description ASC";
	$statusquery = mysqli_query($connection, $sqlstatement);
		while ($result = mysqli_fetch_array($statusquery, MYSQLI_ASSOC)){
			$array[] = $result['Description'];							
		}
    //RETURN JSON ARRAY
    echo json_encode ($array);
//}
?>