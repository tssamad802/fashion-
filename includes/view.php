<?php
session_start();
class view
{
    public function register_errors()
    {
        if (isset($_SESSION['errors'])) {
            $errors = $_SESSION['errors'];
            echo "<br>";
            foreach ($errors as $error) {
                echo "<p style='
                    color: #ff0000;font-weight: 600;font-family: sans-serif;border: 2px solid #fb0000;padding: 8px;margin-bottom: 12px'>$error</p>";
            }
            unset($_SESSION['errors']);
        }
    }

    public function login_errors()
    {
        if (isset($_SESSION['errors'])) {
            $errors = $_SESSION['errors'];
            echo "<br>";
            foreach ($errors as $error) {
                echo "<p style='
                    color: #ff0000;font-weight: 600;font-family: sans-serif;border: 2px solid #fb0000;padding: 8px;margin-bottom: 12px'>$error</p>";
            }
            unset($_SESSION['errors']);
        }
    }
}