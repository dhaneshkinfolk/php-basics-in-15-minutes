<html>
<!--
	BEFORE YOU PROCEED:
	You are expected to know the basics of HTML and (basics of) at least one programming language
-->
<!--You MUST save this file as index.php(this name is used in the code)
	php file have extensions .php, .php3, or .phtml
	PHP stand for 'PHP: Hypertext Preprocessor'  and it is a recursive backronym (Google it if you dont know what it is)
	and PHP originally stood for 'Personal Home Page'
-->
<body>
	<!--php code can be inserted in any parts of code using 
	the format
	<?php
	# code...
	?>
	OR its shorthand representation
	<?
	# code...
	?>
	-->
	<?php //avoid using shorthand for maximum compatability
	$x=12; //variable in php, it is loosely typed - no need to specify type beforehand
	//this is a single line comment in php
	/*
	and 
	this is a multiline
	comment
	*/
	echo "Hello World<br/> x=",$x,"<br/>"; //echo used to display text (multiple texts can be displayed by seperating it with commas)
	//each code line in PHP must end with a semicolon(;)
	$str1="Hello";
	$str2="World";
	$str3=$str1." ".$str2;// string concatenation using '.' operator
	echo "str1=",$str1,"<br/>str2=",$str2,"<br/>After concatenation str3=",$str3;
	echo "<br/>Length of str3=",strlen($str3),"<br/>"; // length of str3
	echo "Position of World in str3=",strpos($str3, $str2),"<br/>"; // position of str2 in str3, if no match is found, it will return FALSE.
	$a=5;
	$b=6;
	//Condtional Operator/ Ternary Operator
	($a>$b)?print("5<br/>"):print "6<br/>";
	/*
	same as 
	if($a>$b)
		print("5<br/>");
	else
		print("6<br/>");
	///echo vs print///
	Return Value
		*echo has no return value
		*print has return value(always 1), hance can be used in expressions
	Paramters
		*echo can take multiple parameters (seperated with ,)
		*print can take only one argument
	Speed
		*echo is marginally faster than print
	*/
	$day=date("D");//date is built in function and this usage returns today's weekday(first three letters)
	switch ($day) { //value of $day is checked against different cases and execute code below matching case
		case 'Mon':
			echo "Today is monday<br/>";
			break; //stop executing here and come out of the switch
		case 'Tue':
			echo "Today is tuesday<br/>";
			break;
		case 'Wed':
			echo "Today is Wednesday<br/>";
			break;
		case 'Thu':
			echo "Today is Thursday<br/>";
			break;
		case 'Fri':
			echo "Today is Friday<br/>";
			break;
		case 'Sun':
			echo "Today is Sunday<br/>";
			break;
		case 'Sat':
			echo "Today is Saturday<br/>";
			break;
		default://does not match to any cases
			echo "Error determining day<br/>";
			break;//well it is not needed, since there is not code below it
	}

	if ($day=="Mon") { //if the given condition is true execute the code below
		echo "Again?!!!";
	}
	elseif ($day=="Sun") { //if first condition is false and this condition is true execute the code below
		echo "Enjoy Today, Tomorrow is monday";
	}
	elseif ($day=="Fri") {//if first 2 conditions are false and this condition is true execute the code below 
		echo "Happy Weakend";
	}
	else// if all the above conditions are false, execute the code below
		echo "Whatever";
	echo "<br/>";
	$numeric_array=array("a","b");//array it will be stored as array[0]="a",array[1]="b"
	echo $numeric_array[0],"<br/>";
	echo $numeric_array[1];
	echo "<br/>";
	$array2[0]="c";
	$array2[2]="d";
	echo $array2[0];
	echo "<br/>";
	$associative_array=array("a"=>1,'b'=>2);//string names can be given to array indices
	echo $associative_array['a'],"<br/>";
	$ass_array2["hey"]="test0";
	$ass_array2["good"]="test1";
	echo $ass_array2["good"],"<br/>";
	$multiarray=array('arr1' => array('test','test1'), 'arr2' => array('test21','test22'));//multi dimensional array- an array with arrays as its elements
	echo $multiarray["arr1"][0],"<br/>";
	$multi=array(array(1,2,3),array(4,5,6));
	echo $multi[0][0],"<br/>";
	$day=1;
	while($day<6){//execute the code below while the condition is satisfied ($day<6)
		echo $day,"<br/>";
		$day++;
	}
	$arr1=0;
	do{//exxecute the code below
		echo ++$arr1, "<br/>";
	}
	while ($arr1 <= 4);//execute code below do while condition is satisfied
	for ($i=0; $i < 5; $i++) { //initialize $i to 0, execute the code below if condtion (miiddle expression) is met and execute third expression
		echo $i,"<br/>";
	}
	foreach (array(1,2,3) as $value) {
		/*
		loops through elements of an array with value pointing to one value at a time
		the following format can be used to loop using key value pair
		foreach ($variable as $key => $value) {
			# code...
		}
		*/
		echo $value,"<br/>";
	}
	function add($x,$y){ //defines a function which takes two parametes $x and $y
		return $x+$y; //return $x + $y to called location
	}
	echo "1+2=".add(5,6),"<br/>";
	/*
	Well u dont need these now, since you saved the file as index.php
	//get url of current file
	$this_page=$_SERVER['PHP_SELF'];
	//get name of current file
	$this_name=basename(__FILE__, '.php').'.php'; 
	*/
	?>
	<form action="index.php" method="get"> <!-- data sent with GET method will be displayed in the url and it can't exceed 2000 chars -->
		Name: <input type="text" name="getname"/>
		<input type="submit" name="getsubmit">
	</form>
	<form action="index.php" method="post"> <!-- data sent with the POST method is invisible to others and has no limits on the amount,  
												however its maximum size depends on post_max_size field in the php.ini file -->
		Name: <input type="text" name="postname"/>
		<input type="submit" name="postsubmit"/>
	</form>
	<?php
	if(isset($_POST['postsubmit'])) //executed only when postsubmit is clicked
	{
		echo "Welcome ".$_POST["postname"]."<br/>";
	}
	if(isset($_GET['getsubmit'])) //executed only when postsubmit is clicked
	{
		//echo "Welcome ".$_GET["getname"]."<br/>";
		/*$_REQUEST function can be used to collect form data sent with both the GET and POST*/
		echo "Welcome ".$_REQUEST["getname"]."<br/>";
	}
	echo "This will be displayed as soon as the file is opened.<br/>";
	?>
</body>
</html>