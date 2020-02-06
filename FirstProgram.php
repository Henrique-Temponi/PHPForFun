<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$ln = "<br>";
$color = "red";
$text = "THONK";
echo "Hello World! and it's " . $color . "<p>";
echo "Hello $text <br>";
// ECHO "Hello World! and it's " . $coloR . "<p>"; useless
# EcHo "Hello World!<p>"; also useless

/*
teste teste teste
varias linhas
skrr
*/

function func(){
	$color = "blue";
    echo "Hello $color <br>";
    echo "Hello global $color <br>";

    global $color;
    echo "Hello $color <br>";
    echo "Hello global $color <br>";
    
    global $text;
    echo "Hello $text <br>";
    
    $GLOBALS["text"] = "sulfur";
    echo "Hello $text <br>";
    //echo "Hello $test <br>";
}
func();


function func1(){
	static $x = 0;
    $x++;
    echo "$x";
}

func1();
func1();
func1();

function add ($x){
	global $ln;
	echo ($x + 1) . $ln;
}

function addHex ($x) {
	global $ln;
    echo $x + 0xa . $ln;
}

echo "<br> x = $x";

//testing echo
echo "Let's go!";
echo "<h2> can use markdown! </h2>";
echo "variables? = $text <br>";
echo "more ", "than ", "one ", "argu", "ment <br>";
echo "yee" . "ee" . "et <br>";

//testing print
print "Let's go part 2";
print "<h2> How about a little print? </h2>";
print "$text <br>";
print "jo" . "in" . "<br>";


//how about data types
//String
$a = "string";
$b = 'string';

echo "$a and $b" . $ln;

//integer
$a = 123;
$b = 0123;
$c = 0xabc;
$d = 0b10;

add($a);
add($b);
add($c);
add($d);

addHex($a);
addHex($b);
addHex($c);
addHex($d);

var_dump($a,$b);
echo $ln;

$array = array(1, 2, 3, 4, 5);
var_dump($array);
echo $ln;

class test {
	//$test = "";
    
    function test(){
    	$this->test = "OK";
    }
}

$we = new test();

echo "$we->test $ln";

?> 

</body>
</html>
