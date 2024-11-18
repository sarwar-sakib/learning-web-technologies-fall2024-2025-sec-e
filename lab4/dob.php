<?php

if (isset($_POST["submit"])) {
    $dob = $_POST["dob"]; 
    if (empty($dob)) {
        echo "Date of Birth cannot be empty.";
    } else {
        
        list($year, $month, $day) = explode('-', $dob);
        $year = (int)$year;
        $month = (int)$month;
        $day = (int)$day;
        
        if (!checkdate($month, $day, $year)) {
            echo "Invalid format.";
        } elseif ($year < 1953 || $year > 1998) {
            echo "Year must be between 1953 and 1998.";
        } else {
            echo "Date of Birth is: $day-$month-$year";
        }
    }
}
?>
