
<?php
//include 'Report.php';
class RangeReport extends Report
{
    private $start;
    private $end;

    public function __construct($s, $e)
    {
        parent::__construct();

        $s = filter_var($s, FILTER_VALIDATE_INT, array('options' => array('min_range' => 0, 'max_range' => 100)));
        if ($s === false) {
            throw new Exception("Bad start value.");
        }
        $this->start = $s;

        $e = filter_var($e, FILTER_VALIDATE_INT, array('options' => array('min_range' => 0, 'max_range' => 100)));
        if ($e === false) {
            throw new Exception("Bad end value.");
        }
        $this->end = $e;
        parent::__construct();
    }

    protected function getReportDescription()
    {
        return "Prints every integer from START to END separated by a space.";
    }

    protected function getTitle()
    {
        return "Number Range Generation";
    }


    protected function getParameterString()
    {
        return "START: $this->start\nEND: $this->end";
    }

    protected function getReportResultString()
    {
        $temp = "";
        for ($x = $this->start; $x <= $this->end; $x++) {
            $temp = $temp . $x . " ";

//        $number_range = range($this->start, $this->end);
//        return implode(", ", $number_range);
        }


    }
}
?>