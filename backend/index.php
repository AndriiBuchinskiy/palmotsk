<?php
require_once 'app/Report.php';
require_once 'vendor/autoload.php';
require_once 'app/YearReport.php';
require_once 'app/Organization.php';
require_once 'app/MonthReport.php';


use Palmo\app\MonthReport;
use Palmo\app\Organization;
use Palmo\app\YearReport;
use Palmo\app\WeeklyReport;


$yearlyReport = new YearReport(new Organization('Palmo','Ivano-Frankivsk',232343,3343544,"lucash Dmytro Oleksandrovich"), 001,"Year Report");
$yearlyReport->setAuthorNameReport('Ivanov Pvan Pavlovich');
$yearlyReport->setTextReport('  Це текст річного звіту за 2022 рік {org_name}    ');
$yearlyReport->setLastEditDateReport('12.12.2021');
$yearlyReport->setEditNumberReport(1);
$yearlyReport->setDateReport('12.12.2021');
echo $yearlyReport->formatTitle();

echo $yearlyReport->render(['org_name' => 'Palmo']);

echo $yearlyReport->getAuthorNameInitials();

echo $yearlyReport->organizationInfo();

$yearlyReport->save();

echo $yearlyReport->getLastEditDateReport();



