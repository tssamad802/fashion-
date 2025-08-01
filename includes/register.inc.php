<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $full_name = trim($_POST['full_name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    require_once 'dbh.inc.php';
    require_once 'model.php';
    require_once 'control.php';

    $db = new database();
    $conn = $db->connection();
    $controller = new controller($conn);
    $model = new model($conn);

    try {
        $errors = [];
        if ($controller->is_empty_inputs($full_name, $username, $email, $password)) {
            $errors[] = "Please fill in all fields!";
        }

        if ($controller->is_invalid_full_name($full_name)) {
            $errors[] = "Type your full name with only letters and spaces";
        }

        if ($controller->is_taken_username($username)) {
             $errors[] = "This username already exists";
        }

        if ($controller->is_invalid_email($email)) {
           $errors[] = "This email is not valid";
        }

        if ($controller->is_taken_email($email)) {
            $errors[] = "This email already exists";
        }

        if ($controller->is_taken_password($password)) {
           $errors[] = "This pwd already exists";
        }

        if ($errors) {
            session_start();
            $_SESSION['errors'] = $errors;
            header('Location: ../register.php');
            exit;
        }
        
        $controller->set_user($full_name, $username, $email, $password);

    } catch (PDOException $e) {
        die('Query Failed : ' . $e->getMessage());
    }
} else {
    header('Location: ../register.php');
    exit;
}
?>