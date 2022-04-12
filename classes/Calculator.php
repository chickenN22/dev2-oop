<?php
    // include_once 'calculatorUI.php';

    class Calculator{
        private $firstnumber;
        private $secondnumber;
        private $arithmetic;

        public function get_firstnumber(){
            return $this->firstnumber;
        }
        public function get_secondnumber(){
            return $this->secondnumber;
        }

        function get_calculation(){

            if($this->arithmetic == "addition"){
                return $this->firstnumber + $this->secondnumber;
            }elseif($this->arithmetic=="subtraction"){
                return $this->firstnumber - $this->secondnumber;
            }elseif($this->arithmetic=="multiplcation"){
                return $this->firstnumber * $this->secondnumber;
            }else{
                return $this->firstnumber / $this->secondnumber;
            }
        }
        
            
        public function set_data($firstnumber,$secondnumber,$arithmetic){
            $this->firstnumber=$firstnumber;
            $this->secondnumber=$secondnumber;
            $this->arithmetic=$arithmetic;
        }
    }
?>