<?php
    class Student{
       private $sname,$rollNo;

       function getData($sname,$rollNo){
           $this->sname=$sname;
           $this->rollno=$rollNo;
       }
       function showData(){
           echo "Name : ".$this->sname." Roll No:  ".$this->rollno;
       }
    }
    $student1 = new Student();
    $student1->getData("Deen",1);
    $student1->showData();
?>