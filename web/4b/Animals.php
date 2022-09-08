<?php

Class Animal {
    protected $name;
    protected $color;

    public function __construct ($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function eat() {
        echo "Eating...";
    }
}

class Dog extends Animal {
    public function bark($amount) {
        if (is_numeric($amount)) {
            while ($amount > 0) {
                echo "Woof! ";
                $amount--;
            }
        } else {
            echo "Whine";
        }
    }
}

class Cat extends Animal {
    public function meow() {
        echo "Meow meow";
    }
}
 
class Hamster extends Animal {
    public function run_in_wheel() {
        echo rand() . " laps run";
    }
}

$my_dog = new Dog("Fido", "Brown");
$my_cat = new Cat("Lord", "Black");
$my_hamster = new Hamster("George", "White");

$my_dog->eat();
$my_cat->eat();
$my_hamster->eat();

$my_dog->bark(5);
$my_cat->meow();
$my_hamster->run_in_wheel();


