<?php

namespace Palmo\app;

class MonthReport extends Report
{
      private $month;
      private $year;


      public function __construct($numberReport, $titleReport,$month,$year)
      {
          $this->year = $year;
          $this->month = $month;
          parent::__construct($numberReport, $titleReport);
      }

      public function getTypeReport():string
      {
         return "Month Report";

      }

      public function getMonthYear():int
      {
          return $this->month;
      }

      public function getYearReport():int
      {
          return $this->year = date('m-Y');
      }
}