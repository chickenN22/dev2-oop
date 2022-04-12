<?php
    class Age{
        private $firstname;
        private $lastname;
        private $birthyear;
        private $current;


        public function get_firstname(){
            return $this->firstname;
        }
        public function get_lastname(){
            return $this->lastname;
        }
        public function get_birthyear(){
            return $this->birthyear;
        }
        public function get_current(){
            return $this->current;
        }
        
        function get_calculateAge(){
            return ($this->current - $this->birthyear);
        }
        

        public function set_data($firstname,$lastname,$birthyear,$current){
            $this->firstname=$firstname;
            $this->lastname=$lastname;
            $this->birthyear=$birthyear;
            $this->current=$current;
        }
    }
?>