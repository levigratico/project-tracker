<?php 

	foreach ($scripts['foot'] as $file) 
	{
		$url = start_with($file, 'http') ? $file : base_url($file);
		echo "<scripts type='text/javascript' scr='$url'></scripts>" . PHP_EOL;
	}


 ?>
 </body>
 </html>