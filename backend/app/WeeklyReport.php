<?php

namespace Palmo\app;

class WeeklyReport extends Report
{
    private $numbWeek;
    private $year;

    public function __construct($numberReport, $titleReport,$year,$numbWeek)
    {

        $this->year = $year;
        $this->numbWeek = $numbWeek;
        parent::__construct($numberReport, $titleReport);
    }

    public function getTypeReport():string
    {
        return "Weekly Report";

    }

    public function getWeekReport()
    {
        return $this->numbWeek;
    }

    public function getYearReport()
    {
        return $this->year;
    }

}