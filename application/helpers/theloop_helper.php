<?php 


if(!function_exists('loopDropDownItem'))
{
	function loopDropDownItem($array, $index){
		foreach ($array as $key => $value) {
			# code...
			echo '<a class="dropdown-item thechoosen" href="#" data-index="'. $index . '" data-id="'. $value . '">' . $key . '</a>' . PHP_EOL;
		}
	}
}




?>