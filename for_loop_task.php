<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″>
</head>
<body>
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
<!– cell 270px wide (8 columns x 60px) –>



<?php



// 1.Create a script that displays 1-2-3-4-5-6-7-8-9-10on one line. There will be nohyphen(-) at the starting and ending position.

for ($x=1;$x<=10;$x++)
    if($x==1 || $x==10){
        echo "$x";
    }
else{
    echo "-$x";
}

echo "<br>";
echo "<hr>";
    

// 2. Create a script using a for loop to add all the integers between 0 and 30 and
// display the total.

$sum=0;
for ($x=1;$x<=30;$x++){
    $sum+=$x;
}
echo "$sum";

echo "<br>";
echo "<hr>";




// 3c. Create a script to construct the following pattern, using nested for loop.
// A A A A A
// A A A B B
// A A C C C
// A D D D D
// E E E E E

for($a = "A"; $a <= "E"; $a++) {
    echo str_repeat("$a",5);
    for($b = 1; $b <= $a; $b++) 
    echo "\n";
    echo "<br />";
}

echo "<br>";
echo "<hr>";

// 3b. Create a script to construct the following pattern, using nested for loop.
// 1 1 1 1 1
// 1 1 1 2 2
// 1 1 3 3 3
// 1 4 4 4 4
// 5 5 5 5 5


for($a = "1"; $a <= "5"; $a++) {
    echo str_repeat("$a",5);
    for($b = 1; $b <= $a; $b++) 
    echo "\n";
    echo "<br />";
}

echo "<br>";
echo "<hr>";


// 4. Create a script to construct the following pattern, using a nested for loop.
// 1 0 0 0 0
// 0 2 0 0 0
// 0 0 3 0 0
// 0 0 0 4 0
// 0 0 0 0 5

for($a = "1"; $a <= "5"; $a++) {
    echo str_repeat("$a",5);
    for($b = 1; $b <= 5; $b++) 
    echo "\n";
    echo "<br />";
}

echo "<br>";
echo "<hr>";



// 5. Write a program to calculate and print the factorial of a number using a for
// loop. The factorial of a number is the product of all integers up to and including
// that number, so the factorial of 5 is 5*4*3*2*1= 120.

$fact=1;
for ($x=1;$x<=5;$x++){
    $fact=$fact*$x;
}
echo "$fact";

echo "<br>";
echo "<hr>";

// Additional. Write a program to calculate and print the sires, the sequence goes 0, 1, 3, 5, 7, 5, 8, 13, 21, and
// so on.

$num=0;
for($x=0;$x<=50;$x++){
    $num=$x;
    if($num%2==0){
        echo "";
    }else{
        echo $num;
    }
}
echo "<br>";
echo "<hr>";

// 6. Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two
// numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and
// so on.

$x = 0;    
$y = 1; 

for($i=0;$i<=10;$i++)    
{    
    $z = $x + $y;    
    echo $z."<br />";         
    $x=$y;       
    $y=$z;     
}   

echo "<br>";
echo "<hr>";


// 7. Write a program which will count the "c" characters in the text
// "OrangeAcademy".

$text="OrangeAcademy";
$search_char="c";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count."\n";
echo "<br>";
echo "<hr>";


// 8. Write a PHP script that creates the following table using for loops. Add
// cellpadding="3px" and cellspacing="0px" to the table tag.


$x =0;
$y=0;
for ($i=1; $i < 6; $i++) {
    echo "<tr>";
    $y=1*(1+$i);
	echo "<td cellpadding=3px and cellspacing=0px>$i*$y</td>";
	echo "<td cellpadding=3px and cellspacing=0px>$i*$y</td>";
    echo "<td cellpadding=3px and cellspacing=0px>$i*$y</td>";
    echo "<td cellpadding=3px and cellspacing=0px>$i*$y</td>";
    echo "<td cellpadding=3px and cellspacing=0px>$i*$y</td>";
	echo "</tr>";
    $x++;	
    
}



echo "<br>";
echo "<hr>";










// 9. Write a PHP script using nested for loop that creates a chess board as shown
// below.
// Use table width="270px" and take 30px as cell height and width.



for($row=1;$row<=8;$row++)
{
echo "<tr>";
for($col=1;$col<=8;$col++)
{
$total=$row+$col;
if($total%2==0){
echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
}else{
echo "<td height=30px width=30px bgcolor=#000000></td>";
}
}
echo "</tr>";
}


echo "<br>";
echo "<hr>";


// 10. Write a PHP script that creates the following table (use for loops).

$x =0;
$y=0;
$z=0;
for ($i=1; $i < 10; $i++) {
    echo "<tr>";
    $y=1*(1+$i);
    $x=$y*2;
    $k=$y*3;
    $z=$y*4; 
    $m=$y*5;
    $l=$y*6;
    $r=$y*7;
    $p=$y*8;
    $q=$y*9;
    $s=$y*10;
   
	echo "<td cellpadding=3px and cellspacing=0px>$y</td>";
	echo "<td cellpadding=3px and cellspacing=0px>$x</td>";
    echo "<td cellpadding=3px and cellspacing=0px>$k</td>";
    echo "<td cellpadding=3px and cellspacing=0px>$z</td>";
    echo "<td cellpadding=3px and cellspacing=0px>$m</td>";
    echo "<td cellpadding=3px and cellspacing=0px>$l</td>";
    echo "<td cellpadding=3px and cellspacing=0px>$r</td>";
    echo "<td cellpadding=3px and cellspacing=0px>$p</td>";
    echo "<td cellpadding=3px and cellspacing=0px>$q</td>";
    echo "<td cellpadding=3px and cellspacing=0px>$s</td>";
	echo "</tr>";
    $x++;	
    
}



echo "<br>";
echo "<hr>";




for($a = 1; $a <= 6; $a++) {
    for($b = 1; $b <= $a; $b++) {
        echo "*";
        if($b < $a) {
           echo " ";
        }
    }
    echo "<br />";
}

echo "<br>";
 echo "<hr>";



for($a = 0; $a <= 6; $a++) {
    for($b = 6-$a; $b>=1; $b--) {
        echo "*";
        if($b < $a) {
           echo " ";
        }
    }
    echo "<br />";
}

echo "<br>";
 echo "<hr>";





 for($a = 1; $a <= 6; $a++) {
    for($b = 1; $b <= $a; $b++) {
        echo "$a";
        if($b < $a) {
           echo " ";
        }
    }
    echo "<br />";
}

echo "<br>";
 echo "<hr>";



for($a = 0; $a <= 6; $a++) {
    for($b = 6-$a; $b>=1; $b--) {
        echo "$a";
        if($b < $a) {
           echo " ";
        }
    }
    echo "<br />";
}

echo "<br>";
 echo "<hr>";





 for($a = 1; $a <= 6; $a++) {
    for($b = 1; $b <= $a; $b++) {
        echo "a";
        if($b < $a) {
           echo " ";
        }
    }
    echo "<br />";
}

echo "<br>";
 echo "<hr>";



for($a = 0; $a <= 6; $a++) {
    for($b = 6-$a; $b>=1; $b--) {
        echo "a";
        if($b < $a) {
           echo " ";
        }
    }
    echo "<br />";
}

echo "<br>";
 echo "<hr>";


?>



</table>
</body>
</html>
</html>