<?php
  class A{
    public $a;
    private $b;
    protected $c;
    public function __construct($value){
      return $this->b=$value;
    }
    public function abc(){
      echo $this->b;
    }
}

  class B extends A{
    public $m=8;
    public function abc(){

    }
  }

  $obj1=new A(10);
$obj1=new A(10);
$obj1->abc();

 ?>
