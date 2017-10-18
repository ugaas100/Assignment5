<?php


class MinMaxReport extends Report
{
    private $my_array;

    protected function getTitle(){
        return "Minimum and Maximum Finder";
    }
    protected function getReportDescription(){
        return "Find the minimum and maximum of the given integers.";
    }
    protected function getParameterString(){
        $temp = "";
        for($x = 0; $x < sizeof($this -> my_array) -1; $x++){
            $temp = $temp.$this -> my_array[$x].", ";
        }
        $temp = $temp.$this -> my_array[$x];
        return "INTEGERS: ".$temp;
    }
    protected function getReportResultString(){
        $min = $this -> my_array[0];
        for($x = 0; $x < sizeof($this -> my_array); $x++){
            if($this -> my_array[$x] < $min){
                $min = $this -> my_array[$x];
            }
        }
        $max = $this -> my_array[0];
        for($x = 0; $x < sizeof($this -> my_array); $x++){
            if($this -> my_array[$x] > $max){
                $max = $this -> my_array[$x];
            }
        }
        return "MINIMUM: $min\nMAXIMUM: $max";
    }

    public function __construct($a){
        $this -> my_array = $a;
        parent::__construct();
    }
}
?>