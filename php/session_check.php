<?php
// session_check.php - Include this file in pages that require authentication
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // User is not logged in, redirect to login page
    header("Location: ../pages/login.html");
    exit();
}

// Optional: Function to get current user data
function getCurrentUser() {
    return array(
        'username' => $_SESSION['username'] ?? '',
        'fullname' => $_SESSION['fullname'] ?? '',
        'email' => $_SESSION['email'] ?? '',
        'gender' => $_SESSION['gender'] ?? '',
        'hobbies' => $_SESSION['hobbies'] ?? '',
        'country' => $_SESSION['country'] ?? ''
    );
}

// Optional: Function to check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}
?>