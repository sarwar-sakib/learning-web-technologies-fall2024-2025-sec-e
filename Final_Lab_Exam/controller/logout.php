<?php
// Start the session
session_start();

// Destroy all session data
session_unset();

// Redirect to the login page (or another page)
header("Location: ../view/signin.html");  // Change to your desired redirect page
exit();
?>
