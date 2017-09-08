<?php 
if(!empty($argv)) {
	array_shift($argv);//filename
	$function=array_shift($argv);//function name
	if(function_exists($function))
	{
		$sum=call_user_func($function,$argv);
		echo $sum;
	}else{
		echo "Oops, Invalid Function name";
	}
}
function add($argv) 
{
	$sum=0;
	if(isset($argv[0])){
		//only sending the 0th index as parameter , parameters enterd by hitting space wont be considered
		if (preg_match('/\\\/', $argv[0]))
		{
			print_r($argv[0]);
		}
		//$argv=explode(",", $argv[0]);
/* 		$argv=explode(",", $argv[0]);
		foreach($argv as $key) {
			if(strrchr($key, '\n')) {
				$new_line=explode('\n',$key);
				foreach($new_line as $key1) {
					if($key1>0) {
						$sum+=$key1;
					}
				}
			}else{
				if($key>0) {
					$sum+=$key;
				}
			}
		} */
	}
	//return $sum;
}
