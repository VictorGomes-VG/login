<?php

	session_start();



	function login(){

        $usuarios = file_get_contents("usuarios.json");
        $usuarios = json_decode($usuarios, true);

        $fez_login =false;

        foreach ($usuarios as $usuario){
            if ($_POST['login'] == $usuarios['usuario'] && $_POST['senha'] == $usuario["senha"]) {

                $fez_login =false;

                $_SESSION['nome'] = $_POST['nome'];
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['senha'] = $_POST['senha'];

                $_SESSION['esta_logado'] = true;

                //redireciona o usuario
                header('Location : index.php');

            } else {

                //deu errado
                header('Location : login.php');

            }
        }

        if ($fez_login == false){
            header("location : login.php");
        }


    }
	function sair(){
	    session_destroy();
	    header('location:login.php');
    }

    //ROTAS

if($_GET['acao'] == "login"){
	    login();
}elseif($_GET['acao'] == 'sair'){
    sair();
}