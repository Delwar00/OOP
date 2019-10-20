<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php
  $var1="delwar";
  $var2=23.0;
  $_var4=23;
  $var3='a';
  echo $var1.' '.$var2.' '.$var3;
  echo "<br>";
  echo gettype($var1).' '.gettype($var2).' '.gettype($var3);
  echo "<br>";
  echo $var1.''.$var2;
  echo "<br>";
  echo $var2+$_var4;
  echo "<br>";
  echo gettype($var2+$_var4);
  echo "<br>";
  echo "variable scope";
  echo "<br>";
  //global scope
  $scope=4;
  function global_scope(){
    //local scope function r vitore
    $scope1=5;
  global $scope;
    print( "inside x is :".$scope."<br>");
  }
  echo "outside x is :".$scope."<br>";
  global_scope();

  //static
  echo "<h2>Static keyword</h2>";
  function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
echo "<h2>Array</h2>"."<br />";

$cars=array('local',111009,'asl');
var_dump($cars);
echo "<h2>Object Data Type</h2>"."<br />";

class person {
  function person(){
     $this->area="gendaria";
  }
}
$as=new person();
echo $as->area."<br />";
$x=0;
$h="habu";
while($x<=4){

  echo $h."<br />";
  $x++;
}
echo "<h4>for loop</h4>"."<br />";
for($x=0;$x<=4;$x++){
echo $h."<br />";
}
echo "<h4>do  loop output</h4>"."<br />";
$xx=0;
do{
  echo "do loop"."<br />";
  $xx++;
}
while($xx<=4);

echo "<p>function</p>"."<br />";
function myname($x,$y){
  $a=$x;
  $b=$y;
  $c=$a+$b;
  return $c;
}
echo myname(2,3);
echo "<p>array</p>"."<br />";
$abu=array('notun','puraton',1,'4',0.98);
var_dump($abu);
echo $abu[0];
echo "<p>Assosiative array</p>"."<br />";
$abul=array('fit'=>"smart","roll"=>122);
print_r($abul);
echo "<br />";
echo $abul['fit'];
echo "<p>Multidimensional array</p>";
$abc=array(
  array('lol','klk',234),
  array('notun','kldskjfk',1000),
  array('smart','sdalfklk',233564)
);

 //print_r($abc);
 // echo $abc[0][0].' '.$abc[0][1].' '.$abc[0][2]."<br />";
 // echo $abc[1][0].' '.$abc[1][1].' '.$abc[1][2]."<br />";
 // echo $abc[2][0].' '.$abc[2][1].' '.$abc[2][2]."<br />";
 for($x=0;$x<3;$x++){
    for($y=0;$y<3;$y++){
       echo $abc[$x][$y]."<br />";
     }
 }
 echo "<p>Sort array</p>"."<br />";
 $arra=array('lol','abc','bcd','koklo');
 rsort($arra);
 $a=count($arra);
 for($x=0;$x<$a;$x++){
   echo $arra[$x]."<br />";
 }
 echo "<p>Sort Assosiative array</p>"."<br />";
 $arra=array('a'=>'lol','b'=>'abc','c'=>'bcd','d'=>'koklo');
 asort($arra);

 foreach ($arra as $key => $value) {
   echo $key.' '.$value."<br />";
 }

   ?>
</body>
</html>
