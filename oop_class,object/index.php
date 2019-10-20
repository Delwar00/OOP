<?php
class FirstClass {
  public $a;
  private $b=7;
  protected $c=8;
  public function LolMethod(){
    return $this->a;
  }
public function Amethod(){
  return $this->b;
}
public function Cmethod(){
  return $this->c;
}

}

$obj= new FirstClass();
 echo "Private value of the property is :".$obj->Amethod()."<br />";
  echo "Protected value of the property is :".$obj->Cmethod()."<br />";
  // echo "Public value is ".$obj->a=6;
  $obj->a=6;
  echo "public value is :". $obj->LolMethod();
 ?>
