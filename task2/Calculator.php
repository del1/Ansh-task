<?php
class Calculator
{
	private $Total;
	function __construct()
	{

	}
	public function sum($argv)
	{
		$this->Total=0;
		if(isset($argv[0])){
			foreach($argv as $key) {
				if($key>0) {//same instruction cost if we add 0
					$this->Total+=$key;
				}
			}
		}
		return $this->Total;
	}
}
if(!empty($argv)) {
	array_shift($argv);//filename
	$function=array_shift($argv);//function name
	$calc= new Calculator();
	if(method_exists($calc, $function))
	{
		$argv=explode(",",$argv[0]);
		echo $calc->$function($argv)."\n";
	}else{
		echo "\n"."Oops, Invalid Function name"."\n";
	}
}