<?php
 require("pub.php");
 require("line.php");
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data

$Topic = "NodeMCU1" ;
$text = "test";
getMqttfromlineMsg($Topic,$text);
echo "OK3";
?>
			

