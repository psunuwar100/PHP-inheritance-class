<?php
    class Animal{
        public $name;
        public $color="red";
        public $height;
        public $weight;
        
        function move(){
            echo "i am jumping ";
        }

        function eat(){
            echo "i eat ";
        }
    }

    class Dog extends Animal{
    }

    // $animal=new Animal;
    // $animal-> move();
    $dog= new Dog();
    $dog-> move();
    echo "<br>";
    echo "thee color of dog is $dog->color";

?>