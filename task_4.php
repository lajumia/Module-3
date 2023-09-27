<?php
/*Create a multidimensional array called $studentGrades to store the grades of three students. 
Each student has grades for three subjects: Math, English, and Science. 
Write a PHP function which takes "$studentGrades" as an 
argument to calculate and print the average grade for each student.*/

$studentGrades = [
    "Student 1" => ['Math' => 55, 'English' => 62, 'Science' => 78],
    "Student 2" => ['Math' => 51, 'English' => 85, 'Science' => 90],
    "Student 3" => ['Math' => 75, 'English' => 80, 'Science' => 85]

];

function result($grades){

    foreach($grades as $name => $result){
       
       $averageMarks = array_sum($result)/count($result);
       
       if($averageMarks>79){
        
        echo $name . " Grade is A+";
       
       }elseif($averageMarks>59 && $averageMarks<80){
       
       echo $name . " Grade is A";
       
       
       }elseif($averageMarks>32 && $averageMarks<60){
       
       echo $name . " Grade is A-";
       
       
       }else{
       
       echo $name. " is Failed";
       }
       echo "<br>";

          
       }
}

result($studentGrades);
