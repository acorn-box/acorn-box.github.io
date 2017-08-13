<?php 
date_default_timezone_set('Asia/Seoul');

//if ($_POST['format']) echo date($_POST['format']);
//else echo date("H:i:s");
if(isset($_POST['to'])){
	$input = $_POST['to'];
	if ($input == "time")
		echo date("H:i:s");
	else echo "hello!";
}
else echo "no parameter!";
?>