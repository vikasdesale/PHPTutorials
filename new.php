<?php
$name="shital";
echo "$name";
echo " ";
$a=strlen($name);

define("b","hii");

echo b;
echo " ";
echo "String length is:$a";
echo "<br>";
$y=100.10;
var_dump($y);
$ch=1;
switch($ch)
{
case 1:
echo "hii";
break;
default:
echo "not";
}
echo " ";
function abc($c)
{
$c=10;
return $c;
}
echo "place this".abc(10);
echo " ";
$count=array("a","b");
echo count($count);
foreach ($count as $value)
{
echo "$value <br>";
}
?>
