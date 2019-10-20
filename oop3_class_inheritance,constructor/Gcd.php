<?php

// function gcd($a, $b)
// {
//   echo $a ." ". $b."<br />";
//     if ($a == 0 || $b == 0)
//         return abs( max(abs($a), abs($b)) );
//     $r = $a % $b;
//     echo $r ."r is "."<br />";
//     echo ($r != 0) ? gcd($b, $r) : abs($b);
// }
//
//  gcd(2,13);
// $a=4;
// $b=18;
// if($a<$b)
// $x=$a;
// else
// $x=$b;
// again:
// if(($a%$x==0) && ($b%$x==0)){
//   echo $a." ".$b." ".$x;
// }
// else {
//   $x=$x-1;
//   goto again;
// }

echo "lcm <br />";
$a=3;
$b=10;
if($a>$b)
$x=$a;
else
$x=$b;
again:
if(($x%$a==0) && ($x%$b==0)){
  echo $a." ".$b." ".$x."<br />";
}
else {
  $x=$x+1;
  goto again;
}
echo "array sum  <br />";
$sum=0;
$a=array(10,20,20);
for($x=0;$x<count($a);$x++)
{
  $sum=$sum+$a[$x];
}
 echo $sum."<br />";
echo "Inline function <br />";

function lk(){
  echo "hasan lk <br />";
  function jk(){
    echo "hasn jk";
  }
}

lk();
jk();
echo "Annonymas function <br />";
function Ass(){
   echo "A function <br />";
  $an=function(){
    echo "An function <br />";
  };
  $an();
}
Ass();
echo "call by value <br />";
function swap($x, $y)
 	 {
 	   $z;
  	   $z = $x;
  	   $x = $y;
  	   $y = $z;
       echo "swap".$x." ".$y."<br />";
  	 }

  	   $a = 7;
       $b = 4;
  	   // printf("Original values are a = %d and b = %d", a, b);
  	   swap($a, $b);
  	   echo "After swap".$a." ".$b."<br />";

       echo "call by refernece <br />";
       function swap1(&$x, &$y)
        	 {
        	   $z;
         	   $z = $x;
         	   $x = $y;
         	   $y = $z;
              echo "swap".$x." ".$y."<br />";
         	 }

         	   $a = 7;
              $b = 4;
         	   // printf("Original values are a = %d and b = %d", a, b);
         	   swap1($a, $b);
         	   echo "After swap".$a." ".$b;

// $sum=0;
// for($x=1;$x<=100;$x++){
//   $sum=$sum+$x;
// }
// echo $sum;
// $arr=array(
//   array(1,2,3),
//   array(4,5,6)
// );
// for($x=0;$x<2;$x++){
//   for($y=0;$y<3;$y++){
//     echo $arr[$x][$y];
//   }
// }

$a=3;
$fact=1;
for($x=$a;$x>=1;$x--){
  $fact=$fact*$x;
}
echo $fact;

//
echo "<br />fibonacci <br />";
$a=0;
$b=1;
echo $a." ".$b;
for($x=0;$x<=5;$x++){
  $fib=$a+$b;
  echo " ".$fib ;
  $a=$b;
  $b=$fib;

}
?>
