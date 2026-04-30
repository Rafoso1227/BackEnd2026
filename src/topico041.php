<?php
$a=10;
$b=2;
echo "Adição:".$a + $b;#adição: 12
echo "<br>Subtração:".($a - $b);//8
echo "<br>Multiplicação:".($a * $b);//20
echo "<br>Divisão:".($a / $b);//5
echo "<br>Módulo:".($a % $b);//0
echo "<br>Exponenciação:".($a ** $b);//100
?> 
<hr>
<?php
$a=10;
$b=2;
$a+=$b;
$b-=5;
echo "a = ".$a;
echo "<br>b = ".$b;
$c=11;
$d=6;
$c%=$d;
$d+=$a;
echo "<br>c = ".$c;
echo "<br>d = ".$d;
?>
<hr>
<?php
$a = "Bete ";
echo "$a <br>";
$b = "Leo ";
echo "$b <br>";
echo $a . $b;
$b .= $a;
echo "<br>$b"; 
?>