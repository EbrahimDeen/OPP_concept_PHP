<?php
class Car{
    public function StartCar(){
        echo "The Car is started <br>";
    }
    public function InvokeParentStart(){
        self::StartCar();
    }
}
class SportsCar extends Car{
    public function StartCar(){
        echo "The Car is started with self start <br>";
    }
    public function InvokeParent(){
        parent::InvokeParentStart();
    }
}

$spCar =new SportsCar();
$spCar->StartCar();
$spCar->InvokeParent();
?>