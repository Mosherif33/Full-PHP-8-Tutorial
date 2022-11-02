<?php 
// This is the first File for learning PHP Via Given Course
echo ("Hello This is Sherif");
// We use define to assign a constant define ("name", "value" );
define ("DEMO", "single");
echo "<br>";
echo DEMO;
echo "<br>";
// Magic constants
echo __FILE__;
echo "<br>";
// Predefined Constants
echo PHP_VERSION;
echo "<br>";
// Variable Variable
$foo = "bar";

$$foo = "baz";

echo $foo, $bar;


