<?php


session_start();

class Login
{
    public function login()
    {

        if (isset($_POST['nome']) && isset($_POST['senha'])) {

            $_SESSION['logado'] = true;
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            $user = App::get('bancoDeDados')->selecionarLogin($nome, $senha);

            if (!empty($user)) {
                $_SESSION['nome'] = $user['nome'];
                header('Location: /PetTop/dashBoard');
            } else if (empty($_SESSION['nome'])) {
                header('Location: /PetTop/Login');
            } else {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                session_destroy();
            }
        }
    }

    public function loginView()
    {
        require 'app/Views/Login/Login.view.php';
    }

    public function logout()
    {

        session_start();

        $_SESSION['logado'] = false;

        session_destroy();

        header('Location: /PetTop/Login');
    }

    public function dashBoard()
    {
        
        require 'app/Views/layout/layout.php';
    }
}
