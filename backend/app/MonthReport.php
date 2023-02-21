<?php

namespace Palmo\app;

class MonthReport extends Report
{
      public function getDateReport():int
      {
          return date('m',strtotime($this->dateReport));
      }
}