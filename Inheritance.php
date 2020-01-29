<?php
    class Parents{
         private $name;

         function properties(){
             echo "This is Parents property <br>";
         }
    }

    class Child extends Parents{
        private $name;

        function childProperty(){
            echo " this child own property <br>";
        }
    }
    $child1 = new Child();
    $child1->properties();
    $child1->childProperty();

?>