<?php


class SumReport extends Report
{
    private $my_array;

    protected function getTitle(){
        return "Sum Calculator";
    }
    protected function getReportDescription(){
        return "Sums the given integers.";
    }
    protected function getParameterString(){
        $temp = "";
        for($x = 0; $x < sizeof($this -> my_array) - 1; $x++){
            $temp = $temp.$this -> my_array[$x].", ";
        }
        $temp = $temp.$this -> my_array[$x];
        return "INTEGERS: ".$temp;
    }
    protected function getReportResultString(){
        $temp = 0;
        for($x = 0; $x < sizeof($this -> my_array); $x++){
            $temp = $temp + $this -> my_array[$x];
        }
        return $temp;
    }

    public function __construct($a){
        $this -> my_array = $a;
        parent::__construct();
    }
}
?>