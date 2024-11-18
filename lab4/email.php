<?php

function validateEMAIL($email) {
    $atPosition = -1;
    $dotPosition = -1;
    $atCount = 0;

  
    for ($i = 0; $i < strlen($email); $i++) {
        $char = $email[$i];
        if ($char === '@') {
            $atCount++;
            $atPosition = $i;
        }    
        elseif ($char === '.') {
            $dotPosition = $i;
        }
    }
   
    if (
        $atCount === 1 &&
        $atPosition > 0 &&
        $dotPosition > $atPosition + 1 &&
        $dotPosition < strlen($email) - 1
    ) {
        return true;
    }
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    if (empty($email)) {
        echo "Email cannot be empty.";
    } 
    elseif (!validateEMAIL($email)){
        echo "Invalid email format.";

    }
    else
    echo "Email: $email";
}

?>
