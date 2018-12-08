<?php

class Calc{

    public $num1;
    public $num2;
    public $calc;

    public function __construct($num1, $num2, $calc){

        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->calc = $calc;
    }

    public function calcMethod(){

        switch ($this->calc){
            case 'add':
                $result = $this->num1 + $this->num2;
                break;

            case 'sub':
                $result = $this->num1 - $this->num2;
                break;

            case 'mul':
                $result = $this->num1 * $this->num2;
                break;
                
            case 'div':
                $result = $this->num1 / $this->num2;
                break;

            case 'rem':
                $result = $this->num1 % $this->num2;
                break;    

            default:
                $result= "error";
                break;

        }
        return $result;
    }
}
