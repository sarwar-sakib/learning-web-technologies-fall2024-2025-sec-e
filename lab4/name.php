<?php
if (isset($_POST['name'])) {
    $name = trim($_POST['name']);


    function isLetter($char) {
        return ($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z');
    }

    function hasValidCharacters($str) {
        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            if (!isLetter($char) && $char !== ' ' && $char !== '.' && $char !== '-') {
                return false;
            }
        }
        return true;
    }

    if (empty($name)) {
        echo "Name cannot be empty.";
    }
    elseif (!isLetter($name[0]) || !hasValidCharacters($name)) {
        echo "Name must start with a letter.";
    }

    elseif (str_word_count($name) < 2) {
       echo "Name must contain at least two words.";
    }

   

  else {
    echo "Name: $name";
}
}


 
?>
