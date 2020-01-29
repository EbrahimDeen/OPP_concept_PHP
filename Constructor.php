<?php
class Example{
    private $name;

    public function __construct($val){
        $this->name=$val;
    }
    public function showVal(){
        echo $this->name;
    }
}
$obj =new Example("Deen");
$obj->showVal();
?>