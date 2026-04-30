<?php
$a=10;
$b=2;
$a+=$b;//
$b-=5;//$b=2-5//$b=-3
echo "a = ".$a;//a = 12
echo "<br>b = ".$b;//b = -3
$c=11;
$d=6;
$c%=$d;//c=11%6//$c=5
$d+=$a;//$d=6+12//$d=18
echo "<br>c = ".$c;//$c=5
echo "<br>d = ".$d;//$d=18
echo "<hr>";
$nome="Bete";
echo $nome.$d;
$c.="cinco";//c = 5."cinco"//c="5cinco"
echo "<br> c = $c";//c =

echo "<hr>";

$z = 100;
$x = 100;
echo "x = ".--$x;//x=100=1//x=101
echo "<br>x final = ".$x;//x final= 101

echo "<hr>";

echo "z = ".$z--;
echo "<br>z final = ".$z;

echo "<hr>";

$i=10;
echo "<br>i = $i";//10
$i++;//11
$i++;//12
++$i;//13
echo "<br>i = $i";//13
$i--;//12
--$i;//11
--$i;//10
echo "<br>i = $i";//10

?>