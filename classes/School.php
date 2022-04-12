<?php

    class Tuition{
        private $fullname;
        private $year_level;
        private $total_units;
        private $laboratory;

        function set_values($fullname,$year_level,$total_units,$laboratory){
            $this->fullname = $fullname;
            $this->year_level = $year_level;
            $this->total_units = $total_units;
            $this->laboratory = $laboratory;   
        }

        function get_fullname(){
            return $this->fullname;
        }

        function get_unit(){
            if($this->year_level=="first"){
                return 550;
            }elseif($this->year_level=="second"){
                return 630;
            }elseif($this->year_level=="third"){
                return 470;
            }else{
                return 501;
            }
        }
        function get_calcTotalUnits(){
            return $this->get_unit() * $this->total_units;
        }
        function get_labFee(){
            if($this->year_level=="first"){
                return 3359;
            }elseif($this->year_level=="second"){
                return 4000;
            }elseif($this->year_level=="third"){
                return 2890;
            }else{
                return 3555;
            }
        }


        function get_totalTuition(){

            if($this->laboratory=='with_lab'){
                return $this->get_calcTotalUnits() + $this->get_labFee(); 
            }else{
                return $this->get_calcTotalUnits();
            }
        }

    }

    // class Tuition{
    //     private $fullname;
    //     private $year_level;
    //     private $total_units;
    //     private $laboratory;

    //     function set_values($fullname,$year_level,$total_units,$laboratory){
    //         $this->fullname = $fullname;
    //         $this->year_level = $year_level;
    //         $this->total_units = $total_units;
    //         $this->laboratory = $laboratory;
    //     }

    //     function get_fullname(){
    //         return $this->fullname;
    //     }

    //     function get_tuition(){
            
    //         if($this->year_level=="first"){
    //             $first = 550 * $this->total_units;
    //             if($this->laboratory=='with_lab'){
    //                 return $first + 3359;
    //             }else{
    //                 return $first;
    //             }

    //         }elseif($this->year_level=="second"){
    //             $second = 630 * $this->total_units;
    //             if($this->laboratory=='with_lab'){
    //                 return $second + 4000;
    //             }else{
    //                 return $second;
    //             }
    //         }elseif($this->year_level=="third"){
    //             $third = 470 * $this->total_units;
    //             if($this->laboratory=='with_lab'){
    //                 return $third + 2890;
    //             }else{
    //                 return $third;
    //             }
    //         }else{
    //             $fourth = 501 * $this->total_units;
    //             if($this->laboratory=='with_lab'){
    //                 return $fourth + 3555;
    //             }else{
    //                 return $fourth;
    //             }
    //         }
    //     }
    // }

?>