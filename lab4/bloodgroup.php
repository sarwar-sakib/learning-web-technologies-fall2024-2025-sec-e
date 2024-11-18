<?php
    if (isset($_POST['submit'])) {
        $bloodgroup = $_POST['bloodgroup'];
        if (empty($bloodgroup)) {
            echo "Select blood group";
        } else {
            echo "Blood group: $bloodgroup";
        }
    }
    ?>