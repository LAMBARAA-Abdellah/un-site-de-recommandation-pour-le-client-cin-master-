<?php

class UsersController
{

    public function auth()
    {
        if (isset($_POST['submit'])) {

            $data['login'] = $_POST['login'];
            // var_dump($data['login']);
            $result = User::login($data);
            // var_dump($result);

            if (
                $result->psseudo === $_POST['login'] && password_verify($_POST['password'], $result->pass)
            ) {
                session_start();

                $_SESSION['logged'] = true;
                $_SESSION['username'] = $result->psseudo;
                $_SESSION['id'] = $result->id_utilisateur;
                Redirect::to('./');
            } else {
                Session::set('error', 'Pseudo ou mot de passe est incorrect');
                Redirect::to('login');
            }
        }
    }

    public function register()
    {
        if (isset($_POST['registre'])) {

            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $data = array(
                'login' => $_POST['login'],
                'email' => $_POST['email'],
                'password' => $password,
            );
            $result = User::createUser($data);
            if ($result === 'ok') {
                Session::set('success', 'compte crée');
                Redirect::to('login');
            } else {
                echo $result;
            }
        }
    }
    static public function logout()
    {
        session_destroy();
        Redirect::to("login");
    }
}
