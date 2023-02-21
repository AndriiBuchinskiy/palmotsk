<?php

namespace Palmo\app;

abstract class Report
{

    protected int $numberReport;
    protected string $titleReport;
    protected string $textReport;
    protected string $authorNameReport;
    protected string $dateReport;
    protected int $editNumberReport;
    protected string $lastEditDateReport;

    private Organization $organization;
    abstract public function getDateReport();



  public function __construct(Organization $organization,$numberReport,$titleReport)
  {
      $this->organization = $organization;
      $this->numberReport = $numberReport;
      $this->titleReport = $titleReport;
  }


  public function render($jak):string
  {
    $text = $this->textReport;
    foreach ($jak as $key => $value)
    {
        $text = str_replace('{' . $key . '}',$value,$text);
    }
    return $text;
  }



   public function getReportNumber():int
   {
       return $this->numberReport;
   }

   public function setReportNumber($numberReport)
   {
      $this->numberReport = $numberReport;
   }
   public function getTitleReport():string
   {
       return $this->titleReport;
   }

  public function setTitleReport($titleReport)
  {
      $this->titleReport = $titleReport;
  }

  public function getTextReport():string
  {
      return $this->textReport;
  }

  public function setTextReport($textReport):string
  {
      $this->textReport = trim($textReport);
      return $this->textReport;
  }

  public function getAuthorNameReport():string
  {
     return $this->authorNameReport;
  }



  public function setAuthorNameReport($authorNameReport)
  {
      $this->authorNameReport = $authorNameReport;
  }



  public function setDateReport($dateReport)
  {
      $this->dateReport = $dateReport;
  }

  public function getEditNumberReport():int
  {
      return $this->editNumberReport;
  }

  public function setEditNumberReport($editNumberReport)
  {
      $this->editNumberReport = $editNumberReport;
  }

  public function getLastEditDateReport():string
  {
      return $this->lastEditDateReport;
  }

  public function setLastEditDateReport($lastEditNumberReport)
  {
      $this->lastEditDateReport = $lastEditNumberReport;
  }
    public function getAuthorNameInitials():string
    {
        $authorName = explode(' ', $this->authorNameReport);
        $surname = array_shift($authorName);
        $initials ='';
        foreach ($authorName as $item) {

            $initials .=strtoupper($item[0].'.');
        }
        return $surname . ' ' . $initials;
    }

    public function getDirectorNameInitials():string
    {
        $directorNames = explode(' ',$this->organization->getDirectorFIO());
        $surnameDir = array_shift($directorNames);
        $initialsDir = '';
        foreach ($directorNames as $item)
        {
            $initialsDir .= strtoupper($item[0].'.');
        }
        return $surnameDir . ' ' . $initialsDir;
    }
    public function organizationInfo():string
    {
        $directorName = $this->getDirectorNameInitials();
        $inn = $this->organization->getInn();
        $kpp = $this->organization->getKpp();
        $nameOrg = $this->organization->getNameOrg();
        $infoOrg = $nameOrg . " (ІПН:" . $inn . "\\КПП:" . $kpp . "). Директор: " . $directorName;
        return $infoOrg;
    }
  public function save()
  {
          $this->editNumberReport +=1;
          $this->lastEditDateReport = date('d-m-Y H:i:s');
  }

  public function formatTitle():string
  {
      return strtoupper($this->titleReport);
  }

}