<?php

require_once('Masterproject.php');
require_once('Project.php');
require_once('Step.php');
require_once('User.php');
require_once('Employee.php');
require_once('File.php');
require_once('functions.php');

/* Users */ 
$user1 = new User(1,'Vorname', 'Nachname', 'Benutzername', 'Passwort', 'Mail', 0711234567, 'Adresse', 1234, 'Ort');

/* Employees */
$employee1 = new Employee($user1, 'tollerolle');
$employee2 = new Employee($user1, 'zweitetollerolle');
var_dump($employee1);
var_dump($employee2);

/* Projects */
$project1 = new Project(1, 'Projekt1', 'Beschreibung', 'Start', 'Ende', 1);

/* Steps */
$step1 = new Step(1, 'Step1', 'Beschreibung', 'Start', 'Ende', 1, 1);

/* Files */
$file1 = new File(1, 'File1', 'pdf', 'Beschreibung', 'Time', 1);
/*
echo $user1->get_firstname();
echo $project1->get_name();
echo $step1->get_name();
echo $file1->get_name();
*/

?>