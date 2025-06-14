<?php
session_start();
require_once("connection.php"); // contains $con = mysqli connection

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = trim($_POST['user_name'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Use prepared statements to prevent SQL injection
        $stmt = $con->prepare("SELECT user_id, password FROM clients WHERE user_name = ? LIMIT 1");
        $stmt->bind_param("s", $user_name);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $user_data = $result->fetch_assoc();

            // Use password_verify for hashed passwords
            if (password_verify($password, $user_data['password'])) {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: project.php");
                exit;
            }
        }

        $error = "Incorrect username or password.";
    } else {
        $error = "Please enter valid credentials.";
    }
}
?>
<?php
session_start();
require_once("connection.php"); // contains $con = mysqli connection

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = trim($_POST['user_name'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Use prepared statements to prevent SQL injection
        $stmt = $con->prepare("SELECT user_id, password FROM clients WHERE user_name = ? LIMIT 1");
        $stmt->bind_param("s", $user_name);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $user_data = $result->fetch_assoc();

            // Use password_verify for hashed passwords
            if (password_verify($password, $user_data['password'])) {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: project.php");
                exit;
            }
        }

        $error = "Incorrect username or password.";
    } else {
        $error = "Please enter valid credentials.";
    }
}
?>
