<?php

class Fuel {
       
    private $__have_Fuel;
    
    public function have_Fuel() {
        
        $this->__have_Fuel = TRUE;
    }
    
    public function not_Fuel() {
        $this->__have_Fuel = FALSE;
    }
    
    public function fuel() {
        return $this->__have_Fuel;
    }
}