<?php

namespace Palmo\app;

abstract class Report
{

    private $numberReport;
    private $titleReport;
    private $textReport;
    private $authorNameReport;
    private $dateReport;
    private $editNumberReport;
    private $lastEditDateReport;

    abstract public function getTypeReport();

  public function __construct($numberReport,$titleReport)
  {
      $this->numberReport = $numberReport;
      $this->titleReport = $titleReport;
  }

   public function getReportNumber()
   {
       return $this->numberReport;
   }

   public function setReportNumber($numberReport)
   {
      $this->numberReport = $numberReport;
   }
   public function getTitleReport()
   {
       return $this->titleReport;
   }

  public function setTitleReport($titleReport)
  {
      $this->titleReport = $titleReport;
  }

  public function getTextReport()
  {
      return $this->textReport;
  }

  public function setTextReport($textReport)
  {
      $this->textReport = $textReport;
  }

  public function getAuthorNameReport()
  {
      $authorName =explode(' ', $this->authorNameReport);
      $surname = array_shift($authorName);
      $initials ='';
      foreach ($authorName as $item) {

          $initials .=strtoupper($item[0].'');
      }
      return $surname . ' ' . $initials;
  }

  public function setAuthorNameReport($authorNameReport)
  {
      $this->authorNameReport = $authorNameReport;
  }

  public function getDateReport():string
  {
     return $this->dateReport;
  }

  public function setDateReport($dateReport)
  {
      $this->dateReport = $dateReport;
  }

  public function getEditNumberReport()
  {
      return $this->editNumberReport;
  }

  public function setEditNumberReport($editNumberReport)
  {
      $this->editNumberReport = $editNumberReport;
  }

  public function getLastEditDateReport()
  {
      return $this->lastEditDateReport;
  }

  public function setLastEditNumberReport($lastEditNumberReport)
  {
      $this->lastEditDateReport = $lastEditNumberReport;
  }
}