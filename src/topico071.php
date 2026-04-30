<?php

echo "<h1>While</h1>";
$i=0;
while($i<5){

    echo " $i"; // $i=0 +1= $i=1... $i=5 parando o looping
    $i++;
}

/*
 saída: 0 1 2 3 4

1) valor inicial? 0
2) condição? $<5
3) contador? $i++ = +1
4) quantas vezes o looping foi executado? 5
5) valor que torna a condição como falsa? 5
--------------------------

 */

echo "<h1>While</h1>";
$i=4;
while($i>=0){

    echo " $i<br>";  
    $i--;
}

    /*

    Saída: 4 3 2 1 0

Saída: 11 12 13 14 

    */

echo "<h1>While</h1>";

$i=0;

while($i<=10){

    echo " $i";  
    $i ++;
}

/*
0 
*/

echo "<h1>Do While </h1>";

$i=0;

do{
        echo " $i";
        $i++;
    }while($i<5);

    /*

    Saída: 0 1 2 3 4

1) valor inicial? 
2) condição? 
3) contador? 
4) quantas vezes o looping foi executado? 
5) valor que torna a condição como falsa? 
    */

echo "<h1>For</h1>";

echo "<h1>Looping Aninhado</h1>";

for($i=0;$i<5;$i++){ 
    echo "$i ";

    for ($j=0;$j<2;$j++){
        echo "$i $j<br>";
    }
}

/*
Saída: 
     
*/


/*
    Saída: 0 1 2 3 4
*/
?>