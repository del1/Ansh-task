<?php 
if(!empty($argv)) {
	array_shift($argv);//filename
	$function=array_shift($argv);//function name
	if(function_exists($function))
	{
		$sum=call_user_func($function,$argv);
		//only sending the 0th index as parameter , parameters enterd by hitting space wont be considered
		echo $sum;
	}else{
		echo "Oops, Invalid Function name";
	}
}
function add($argv) 
{
	$sum=0;
	if(isset($argv[0])){
		$argv=explode(",",$argv[0]);
		foreach($argv as $key) {
			if($key>0) {
				$sum+=$key;
			}
		}
	}
	return $sum;
}
