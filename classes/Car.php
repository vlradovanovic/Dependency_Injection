<?php

class Car {
    
    //Definisani property klase Car
    private $__correct;
    private $__fuel;
    private $__ignition;

    //Dependency Injection preko konstruktora klase
    public function __construct(Correct $correct, Fuel $fuel) {
        $this->__correct = $correct;
        $this->__fuel = $fuel;
    }
    
    public function go() {
        
        //Automobil moze jedino krenuti ako je ispravan i ako ima goriva
        if ($this->__correct->isCorrect() && $this->__fuel->have_Fuel()) {
            $this->__ignition = TRUE;
        }
        echo 'HERE WE GO!!!!';
    }
    
    public function stop() {
        
        //Ukoliko je automobil neispravan ili nema goriva, ne moze krenuti
        if ($this->__correct->notCorrect() || $this->__fuel->not_Fuel()) {
            $this->__ignition = FALSE;
        }
        echo 'WE HAVE TO STOP!!!';
    }
}