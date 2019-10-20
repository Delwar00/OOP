<?php
for($x=1;$x<=10;$x++){
  for($j=1;$j<=$x;$j++){
    echo $j;
  }
  echo "<br />";
}
for($x=1;$x<=10;$x++){
  for($j=10;$j>=$x;$j--){
    echo $j;
  }
  echo "<br />";
}

for($x=10;$x>=1;$x--){
  for($j=1;$j<=$x;$j++){
    echo ' '.$j;
  }
  echo "<br />";
}
$cv=3;
for($x=1;$x<=10;$x++){
  echo $cv."*".$x."=".$cv*$x."<br />";
}
$x=1;
for($x=1;$x<=10;$x++){
  if($x==4)
  continue;
  echo $x."<br />";
}

if(!isset($_COOKIE['lol'])){
  setcookie('lol','1',time()+86400) or die('cookie dies');
  echo "first vist";
}
else {
  echo "old visit";
}
 ?>
