<?php

session_start();

// Clear all session variables, then destroy the session completely.
$_SESSION = [];
session_unset();
session_destroy();

// Send the user back to a fresh, default order form.
header("Location: index.php");
exit();

?>
