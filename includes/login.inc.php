<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
        if ($controller->is_empty_inputs_login($email, $password)) {
            $errors[] = "Please fill in all fields";
        }

        if ($errors) {
            session_start();
            $_SESSION['errors'] = $errors;
            header('Location: ../login.php');
            exit;
        }

        $user = $controller->login($email, $password);
        if ($user) {
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: ../index.php?login');
            exit;
        } else {
            header('Location: ../login.php?error');
            exit;
        }


    } catch (PDOException $e) {
        die('Query Failed : ' . $e->getMessage());
    }

} else {
    header("Location: ../login.php");
    exit;
}