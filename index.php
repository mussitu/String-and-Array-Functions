<?
	class Fun{

		public function __construct()
		{
			echo "Hi. I am an object of class Fun";
		}

		public function print1($text){
			echo "<h1>print1 Function Demo</h1>";
			echo $text;
			echo "<hr>";
		}

		public function print2($text,$text2)
		{
			echo "<h1>print2 Function Demo</h1>";
			echo $text." ".$text2;
			echo "<hr>";
		}

		public function printString()
		{
			echo "<h1>printString Function Demo</h1>";
			echo "Hello world. This is the printString function";
			echo "<hr>";
		}
		
		public function printString2()
		{
			echo "<h1>printString2 Function Demo</h1>";
			echo "Hello world!!! This is the printString2 function";
			echo "<hr>";
		}

		public function capsString()
		{
			echo "<h1>capsString Function Demo</h1>";
			echo "HELLO WORLD!";
			echo "<hr>";
		}

		public function capsString2()
		{
			echo "<h1>capsString2 Function Demo</h1>";
			echo "HELLO WORLD! I AM CAPSTRING2";
			echo "<hr>";
		}

		public function smallString()
		{
			echo "<h1>smallString Function Demo</h1>";
			echo "hello world i am small string";
			echo "<hr>";
		}

		public function smallString2()
		{
			echo "<h1>smallString2 Function Demo</h1>";
			echo "hello world i am small string2. check out the next two functions for info on presidents";
			echo "<hr>";
		}

		public function georgeWash()
		{
			echo "<h1>georgeWash Function Demo</h1>";
			echo "hello world I am George Washington. The 1st US President";
			echo "<hr>";
		}

		public function trump()
		{
			echo "<h1>trump Function Demo</h1>";
			echo "hello world I am Donald Trump. The current US President";
			echo "<hr>";
		}

		public function printArr($arr)
		{
			echo "<h1>printArr Function Demo</h1>";
			foreach ($arr as $key) {
				echo $key." ";
			}
			echo "<hr>";
		}

		public function printArrSkip1($arr)
		{
			echo "<h1>printArrSkip1 Function Demo</h1>";
			for ($i=0; $i <sizeof($arr) ; $i+=2) { 
				echo $arr[$i];
			}
				
			echo "<hr>";
		}		

		public function printArrSkip2($arr)
		{
			echo "<h1>printArrSkip2 Function Demo</h1>";
			for ($i=0; $i <sizeof($arr) ; $i+=3) { 
				echo $arr[$i]." ";
			}
				
			echo "<hr>";
		}	



		public function printArrBackwards($arr)
		{
			echo "<h1>printArrBackwards Function Demo</h1>";
			for ($i=sizeof($arr); $i >-1 ; $i--) { 
				echo $arr[$i]." ";
			}
			echo "<hr>";
		}

		public function printArrSkip1Backwards($arr)
		{
			echo "<h1>printArrSkip1Backwards Function Demo</h1>";
			for ($i=sizeof($arr); $i >-2 ; $i-=2) { 
				echo $arr[$i]." ";
			}
			echo "<hr>";
		}

		public function printArrSkip2Backwards($arr)
		{
			echo "<h1>printArrSkip2Backwards Function Demo</h1>";
			for ($i=sizeof($arr); $i >-2 ; $i-=3) { 
				echo $arr[$i]." ";
			}
			echo "<hr>";
		}

		public function printAnArr()
		{
			echo "<h1>printAnArr Function Demo</h1>";
			$arr=array(5,3,2,1,8);
			echo "I print an internal array<br>";
			foreach ($arr as $key ) {
				echo $key." ";
			}
			echo "<hr>";
		}

		public function printAnArr2()
		{
			echo "<h1>printAnArr2 Function Demo</h1>";
			$arr=array(4,3,2,7,7,7,8);
			echo "I also print an internal array<br>";
			foreach ($arr as $key ) {
				echo $key." ";
			}
			echo "<hr>";
		}

			public function print4s()
		{
			echo "<h1>print4s Function Demo</h1>";
			$arr=array(4,4,4,4,4,4,4,4,4,4,4,4,4,4,4);
			echo "I print 4s<br>";
			foreach ($arr as $key ) {
				echo $key." ";
			}
			echo "<hr>";
		}

		public function printEmergency()
		{
			echo "<h1>printEmergency Function Demo</h1>";
			$arr=array(9,1,1);
			echo "I print an emergency number<br>";
			foreach ($arr as $key ) {
				echo $key." ";
			}
			echo "<hr>";
		}


	}

	$obj=new Fun();
	$text="This is my text";
	$text2="Abraham Lincoln was the 16th President";
	$obj->print1($text);
	$obj->print2($text,$text2);
	$obj->printString();
	$obj->printString2();
	$obj->capsString();
	$obj->capsString2();
	$obj->smallString();
	$obj->smallString2();
	$obj->georgeWash();
	$obj->trump();

	$arrayTest = array(1,2,3,4,5,6,7,8,9,10);
	$obj->printArr($arrayTest);
	$obj->printArrBackwards($arrayTest);
	$obj->printArrSkip1Backwards($arrayTest);
	$obj->printArrSkip1($arrayTest);
	$obj->printArrSkip2($arrayTest);
	$obj->printArrSkip2Backwards($arrayTest);
	$obj->printAnArr();
	$obj->printAnArr2();
	$obj->print4s();
	$obj->printEmergency();

?>