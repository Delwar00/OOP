<?php
abstract class wow{
  public $a=5;
  abstract public function cac();
}
class B extends wow{
  public function cac(){
    echo "lol".$this->a."<br />";
  }
}
class C extends wow{
  public function cac(){
    echo "welcome".$this->a;
  }
}
$obj=new B();
$obj->cac();
$obj1=new C();
$obj1->cac();
 ?>
