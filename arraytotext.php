<?php
if(!empty($_GET)){
    $student = [];
    $student['First_Name'] = $_GET['firstname'];
    $student['Last_Name'] = $_GET['lastname'];

    
    $studentArray = [];
    array_push($studentArray, $student);
    $str = print_r($studentArray, true);
    file_put_contents('student.txt', $str, FILE_APPEND);
}
?>
