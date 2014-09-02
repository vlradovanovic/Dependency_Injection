<?php

class Correct {
    
    private $__is_Correct;
    
    public function isCorrect() {
        $this->__is_Correct = TRUE;
    }
    
    public function notCorrect() {
        $this->__is_Correct = FALSE;
    }
    
    public function correct() {
        return $this->__is_Correct;
    }
}