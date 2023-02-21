<?php

namespace Palmo\app;

class YearReport extends Report
{
    public function getDateReport()
    {
        return date('Y',strtotime($this->dateReport));
    }
}