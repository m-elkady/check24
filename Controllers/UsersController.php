<?php

namespace Check24\Controllers;

use Check24\Models\Users;
use Check24\Template;

class UsersController
{
    private $model;

    public function __construct()
    {
        $this->model = new Users();
    }

    public function login()
    {
        Template::view('users/login');
    }

    public function postLogin()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            back();
        }

        $user = $this->model->query("select * from users where username = ?", $username)->fetchArray();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                redirect('index.php');
            }
        }

        back();
    }

    public function logout(){
        session_unset();
        session_destroy();
        back();
    }



}