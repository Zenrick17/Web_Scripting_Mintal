<?php
// test_session.php - Simple script to test session functionality
session_start();

echo "<h2>Session Test</h2>";
echo "<h3>Current Session Data:</h3>";

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    echo "<p><strong>Status:</strong> User is logged in</p>";
    echo "<p><strong>Username:</strong> " . htmlspecialchars($_SESSION['username']) . "</p>";
    echo "<p><strong>Full Name:</strong> " . htmlspecialchars($_SESSION['fullname']) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($_SESSION['email']) . "</p>";
    echo "<p><strong>Gender:</strong> " . htmlspecialchars($_SESSION['gender']) . "</p>";
    echo "<p><strong>Hobbies:</strong> " . htmlspecialchars($_SESSION['hobbies']) . "</p>";
    echo "<p><strong>Country:</strong> " . htmlspecialchars($_SESSION['country']) . "</p>";
    echo "<br><a href='../php/logout.php'>Logout</a>";
} else {
    echo "<p><strong>Status:</strong> User is not logged in</p>";
    echo "<br><a href='../pages/login.html'>Login</a>";
}

echo "<br><br><a href='../dashboard.php'>Go to Dashboard</a>";
?>