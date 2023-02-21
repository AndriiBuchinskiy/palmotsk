<?php

namespace Palmo\app;

class WeeklyReport extends Report
{
    public function getDateReport()
    {
        return date('W',strtotime($this->dateReport));
    }

}