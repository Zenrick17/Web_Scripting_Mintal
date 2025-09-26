<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $found = false;
    $userFullName = "";

    // Check if users.txt file exists
    if (file_exists("users.txt")) {
        $users = file("users.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        if ($users !== false) {
            foreach ($users as $user) {
                $userData = explode("|", $user);
                if (isset($userData[0]) && isset($userData[1]) && isset($userData[2])) {
                    $savedUser = $userData[0];
                    $savedPass = $userData[1];
                    $savedFullName = $userData[2];
                    
                    if ($username == $savedUser && $password == $savedPass) {
                        $found = true;
                        $userFullName = $savedFullName;
                        break;
                    }
                }
            }
        }
    }

    if ($found) {
        header("Location: Dashboard.html");
    } else {
        echo "<script>
            alert('Invalid username or password!');
            window.history.back();
        </script>";
    }
}
?>
