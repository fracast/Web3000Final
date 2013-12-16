<?php
	function read_prayer($start, $break, $filename = "prayer.txt") {
		
		$txt_file = file_get_contents($filename);
		$rows = explode("\n", $txt_file);

		foreach($rows as $verse){

			echo $start;
			echo $verse;
			echo ($break);
		}
		// $fh = fopen($filename,"r");
		// $data = fread($fh,filesize($filename));
		// fclose($fh);

		// $counter = intval($data);
		// $counter = $counter + 1;

		// $fh = fopen($filename,"w");
		// fwrite($fh,$counter);
		// fclose($fh);

		// return $counter;
	}

?>

