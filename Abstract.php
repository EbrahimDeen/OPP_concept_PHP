<?php
abstract class Person{

    abstract public function getDetails();

    public function bloodGroup(){
        echo "A+";
    }
}
class student extends Person{
    public function getDetails(){
        //here you can get details accoding to student 
        echo "student details <br> ";
    }
}
class Teacher extends Person{
    public function getDetails(){
        //here you can get details accoding to teacher 
        echo "Teacher details  <br>";
    }
}
$sd = new student();
$sd->getDetails();
$th = new Teacher();
$th->getDetails();
?>