<?php
//blueprint
    class Car{
        public $speed=100;
        public $name= 'mercedes';
        public $color= 'black';
        public $country= 'nepal';

        function move(){
            echo "<br>";
            echo "i am the fastest car having pace of $this->speed";
        }
        //constructor
        // function __construct($color){
        //     $this->color=$color;
            
        // }

        // function carFeature(){
        //     echo "<br>";
        //     echo "the color of car is $this->color";
        // }
    }
    $car= new Car;
    $car2= new Car;
    echo  "the speed of car is $car->speed";
    echo "<br>";
    $car->speed=500;
    echo "the new speed of car is $car->speed";
    echo "<br>";
    echo "the name of car is $car->name";

 $car->move(); //function call
 $car2->move(); //function call

?>