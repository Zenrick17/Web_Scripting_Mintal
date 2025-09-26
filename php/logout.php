<?php
session_start();
session_destroy();
// Redirect to pages login
header("Location: ../pages/login.html");
exit();
?>