<?php

namespace Palmo\app;

class Organization
{
    protected string $nameOrganization;

    protected int $inn;

    protected int $kpp;

    protected string $addres;
    protected string $directorFIO;



    public function __construct($nameOrganization,$addres,$inn,$kpp,$directorFIO)
    {
        $this->addres = $addres;
        $this->directorFIO = $directorFIO;
        $this->inn = $inn;
        $this->kpp = $kpp;
        $this->nameOrganization =$nameOrganization;
    }

  public function getInn()
  {
      return $this->inn;
  }

  public function getKpp()
  {
      return $this->kpp;
  }

  public function getDirectorFIO(){
        return $this->directorFIO;
  }
  public function getNameOrg(){
        return $this->nameOrganization;
  }

}