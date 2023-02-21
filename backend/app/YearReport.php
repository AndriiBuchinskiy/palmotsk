<?php

namespace Palmo\app;

class YearReport extends Report
{
    private $year;

    public function __construct($numberReport, $titleReport, $year) {

        $this->year = $year;
        parent::__construct($numberReport, $titleReport);

    }


    public function getYearReport($year):int
    {
        return $this->year = date('Y') ;
    }
    public function getTypeReport():string
    {
        return "Year Report";
    }
}