<?php


abstract class Report
{
    private $generation_time_stamp;
    public function __construct()
    {
        $this -> generation_time_stamp = date(DATE_RFC2822);
    }

    abstract protected function getTitle();
    abstract protected function getReportDescription();
    abstract protected function getParameterString();
    abstract protected function getReportResultString();

    protected function getGenerationTimeStamp()
    {
        return $this -> generation_time_stamp;
    }

    public function printToTerminal()
    {
        echo "Report title: {$this -> getTitle()}\n";
        echo "Report generated at: {$this -> getGenerationTimeStamp()}\n";
        echo "Report description: {$this -> getReportDescription()}\n";
        echo "Report parameters:\n{$this -> getParameterString()}\n\n";
        echo "Report result:\n{$this -> getReportResultString()}\n";
    }


}
?>