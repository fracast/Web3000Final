<?php
	//First, test if our POST superglobal exists.

// 	echo '<pre>';
// var_dump($_POST);
// echo'</pre>';

	$verse = isset($_POST["key"]) ? $_POST["key"] : "";
		//echo $verse;
	file_put_contents("prayer.txt", "\r\n", FILE_APPEND);
	file_put_contents("prayer.txt", $verse, FILE_APPEND);

	header("Location: index.php?updated&readyToGo");
?>