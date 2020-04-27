<?php
class Input{
	function post($content){
	if($content ==''){
		return false;
	}
	

	$n=['admin','hacker'];
	foreach($n as $name){
		if($content==$name){
			return false;
		}
	  }
	
	return true;
	}
}

?>