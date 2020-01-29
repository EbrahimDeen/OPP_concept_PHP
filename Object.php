<?php
    class Student{
        private $name,$address,$contactNo;
        
        function getData($sname,$add,$con){
            $this->name=$sname;
            $this->address=$add;
            $this->contactNo=$con;
        }
        function showData(){
            echo "Name : ".$this->name;
        }
        
    }
    $Deen = new Student();
    $Deen->getData("Deen","A467",1234);
    $Deen->showData();
?>