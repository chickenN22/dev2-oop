<?php

class Fruits{
    // name, color, size (what fruit)
    public $name;
    private $color;
    private $size;

    // to get private properties, we need to creare "PUBLIC" methods

    public function get_color(){
        return $this->color;
        #we need $this-> to point properties and methods inside our class
        #you can only use 1 return in methods
    }
    public function get_size(){
        return $this->size;
    }
    public function get_name(){
        return $this->name;
    }

    public function set_data($fname,$fcolor,$fsize){
        $this->name=$fname;
        $this->color=$fcolor;
        $this->size=$fsize;
    }

}


?>