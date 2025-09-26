<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $found = false;
    $userFullName = "";
    $userEmail = "";
    $userGender = "";
    $userHobbies = "";
    $userCountry = "";

    // Check if users.txt file exists (path relative to php folder)
    $usersFile = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'users.txt';
    if (file_exists($usersFile)) {
        $users = file($usersFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        if ($users !== false) {
            foreach ($users as $user) {
                $userData = explode("|", $user);
                if (count($userData) >= 7) {
                    $savedUser = $userData[0];
                    $savedPass = $userData[1];
                    $savedFullName = $userData[2];
                    $savedEmail = $userData[3];
                    $savedGender = $userData[4];
                    $savedHobbies = $userData[5];
                    $savedCountry = $userData[6];
                    
                    if ($username == $savedUser && $password == $savedPass) {
                        $found = true;
                        $userFullName = $savedFullName;
                        $userEmail = $savedEmail;
                        $userGender = $savedGender;
                        $userHobbies = $savedHobbies;
                        $userCountry = $savedCountry;
                        break;
                    }
                }
            }
        }
    }

    if ($found) {
        // Store user data in session
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['fullname'] = $userFullName;
        $_SESSION['email'] = $userEmail;
        $_SESSION['gender'] = $userGender;
        $_SESSION['hobbies'] = $userHobbies;
        $_SESSION['country'] = $userCountry;
        
        // Redirect to dashboard PHP file
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>
            alert('Invalid username or password!');
            window.history.back();
        </script>";
    }
}
?>