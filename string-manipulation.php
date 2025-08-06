<?php


$name  = 'Waqas ';
$middle_name = 'Ali ';
$last_name = 'Azhar';
echo $name.$middle_name.$last_name;

$student1 = 'Amjad';
$student2 = 'Akbar';
$student3 = 'Asad';

echo $student1;
echo $student2;

$studentsArray = array($student1,$student2,$student3,"Akram","Asghar","Ahmed","Momin");

echo implode("<br>",$studentsArray);
exit;



?>