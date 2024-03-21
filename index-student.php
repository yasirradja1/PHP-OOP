<?php

require_once 'Studentlijst.php';

$schoolTripList = new SchoolTripList();
$schoolTripList->addStudent(new Student('Koningstein', '', '', ''));
$schoolTripList->addStudent(new Student('', 'Mohammed', 'sod2a', 'Nee'));
$schoolTripList->addStudent(new Student('', 'Osama', 'sod2a', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Abdel', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Kuta', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Yadira', 'sod2a', 'Nee'));
$schoolTripList->addStudent(new Student('Brugge', '', '', ''));
$schoolTripList->addStudent(new Student('', 'Ali', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Yasir', 'sod2a', 'Nee'));
$schoolTripList->addStudent(new Student('', 'Musa', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Iliass', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Mootje', 'sod2a', 'Nee'));
$schoolTripList->addStudent(new Student('Drimmelen', '', '', ''));
$schoolTripList->addStudent(new Student('', 'Rob', 'sod2b', 'Nee'));
$schoolTripList->addStudent(new Student('', 'Pim', 'sod2a', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Micheal', 'sod2b', 'Nee'));
$schoolTripList->addStudent(new Student('', 'Jordan', 'sod2a', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Erwing', 'sod2b', 'Nee'));




$schoolTripList->render();