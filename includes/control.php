<?php

class controller extends model
{
    public function is_empty_inputs($full_name, $username, $email, $password)
    {
        return empty($full_name) || empty($username) || empty($email) || empty($password);
    }

    public function is_empty_inputs_login($email, $password)
    {
        return empty($email) || empty($password);
    }

    public function is_invalid_full_name($full_name)
    {
        return !preg_match("/^[a-zA-Z ]+$/", $full_name);
    }

    public function is_invalid_email(string $email)
    {
        return !filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}