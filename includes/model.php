<?php

class model
{

    public $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function is_taken_username(string $username)
    {
        $sql = "SELECT `username` FROM `users` WHERE username = :username";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('username', $username);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function is_taken_email(string $email)
    {
        $sql = "SELECT `email` FROM `users` WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('email', $email);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function is_taken_password(string $password)
    {
        $sql = "SELECT `pwd` FROM `users` WHERE pwd = :password";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('password', $password);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function set_user($full_name, $username, $email, $password)
    {
        $sql = "INSERT INTO `users` (full_name, username, email, `pwd`) VALUES (:full_name, :username, :email, :pwd)";
        $stmt = $this->conn->prepare($sql);
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pwd', $password_hash);
        $stmt->execute();
        header('Location: ../login.php?success');
        exit;
    }

    // login
    public function login($email, $password)
    {
        $sql = "SELECT email, pwd FROM `users` WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['pwd'])) {
            return $user;
        }
    }
}