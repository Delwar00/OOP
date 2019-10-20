<?php
echo "<h2>Overloading akoi class r vitore method same parameter different</h2>";
class A{
  public $a;
  public function getmethod($b){
    echo $b." single argumnt <br />";
  }
  public function getmethod1($b, $c){
    echo $b.' '.$c." Double argument <br />";
  }
}
$obj=new A();
$obj->getmethod(4);
$obj->getmethod1(4,5);

echo "<h2>Overriding differnt class r vitore method same parameter o same must thakte hobe</h2>";
class D{
  public function ridingmethod($a){
    echo $a." riding ";
  }
}
class E extends D{
  public $b="Admin";
  public function ridingmethod($a){
    echo $a." riding ".$this->b;
  }
}
$ob=new E();
$ob->ridingmethod(1);

echo "<h2>Interface</h2>";
interface lol{
  public function a();
}
interface bol{
  public function b();
  }
class smart implements lol,bol{
  const Ab=4;
  public function a(){
    echo "lol <br />";
  }
  public function b(){
    echo self::Ab ." bol <br />";
  }
}
$o=new smart();
$o->a();
$o->b();
echo "<h2>Ploymorphism</h2>";
interface abu{
  public function s();
}
class circle implements abu{
  public $ab;
  // public function __construct($r){
  //    $this->ab=$r;
  // }
  public function get($r){
      $this->ab=$r;
  }
  public function s(){
    echo 3.1416*$this->ab*$this->ab."<br />";
  }
}
class triangle implements abu {
  public $hei;
  public $wid;
  // public function __construct($r){
  //    $this->ab=$r;
  // }
  public function __construct($h,$w){
    $this->hei=$h;
    $this->wid=$w;
  }
  public function s(){
    echo .5*$this->hei*$this->wid;
  }
}
$obj1=new circle();
$obj1->get(5);
$obj1->s();
$obj1=new triangle(10,6);
// $obj1->gett(2,6);
$obj1->s();
echo "<h2>Static method and property</h2>";
class local{
  static public $a;
  static private $b;
  static public function pri($c){
    echo self::$b=$c;
  }
  static public function lol(){
    echo self::$a;
  }
}
local::$a=5;
local::lol();
local::pri(3);





 ?>
