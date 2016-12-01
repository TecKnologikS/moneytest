<?php 

class ApiTest extends TestCase
{
    public function testIfApiReturnGoodResult()
    {
        $url="http://tecknologiks.com/money/api.php?curr=EUR&somme=100,EUR;200,EUR;300,EUR";
		$result = file_get_contents($url);
		if ($result != '600') {
			throw("RATE");
		}
    }
	
	public function testIfApiReturnGoodResult()
    {
        $url="http://tecknologiks.com/money/api.php?curr=EUR&somme=100,EUR;200,EUR;300,EUR";
		$result = file_get_contents($url);
		if ($result != '600') {
			throw("RATE");
		}
    }
}





?>