<?php

    $erroNome = "";
    $erroSNome = "";
    $erroEmail = "";
    $erroTelefone = "";
    $erroMSG = "";

    //Verifica se existe o metodo POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(empty($_POST['nome'])){
            $erroNome = "Por favor, preencha o nome";
        }else{
            $nome = segurancaDoPOST($_POST['nome']);

            //Funcao que permite apenas caracteres específicos
            if(!preg_match("/^[a-zA-Z-' ]*$/", $nome)){
                $erroNome = "Apenas letras e espaços em branco!";
            }
        }

        if(empty($_POST['snome'])){
            $erroSNome = "Por favor, preencha o sobrenome";
        }else{
            $snome = segurancaDoPOST($_POST['snome']);

            //Funcao que permite apenas caracteres específicos
            if(!preg_match("/^[a-zA-Z-' ]*$/", $snome)){
                $erroSNome = "Apenas letras e espaços em branco!";
            }
        }

        if(empty($_POST['email'])){
            $erroEmail = "Por favor, preencha o e-mail";
        }else{
            $email = segurancaDoPOST($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erroEmail = "E-mail inválido!";
            }
        }

        if(empty($_POST['telefone'])){
            $erroTelefone = "Por favor, preencha telefone";
        }else{
            $telefone = segurancaDoPOST($_POST['telefone']);
            if(strlen($telefone) != 10 && strlen($telefone) != 11){
                $erroTelefone = "Telefone inválido";
            }

            if(!preg_match("/^[1-9]*$/", $telefone)){
                $erroTelefone = "Apenas números!";
            }
        }

        if(empty($_POST['texto'])){
            $erroMSG = "Por favor, preencha o campo de mensagem";
        }else{
            $mensagem = segurancaDoPOST($_POST['texto']);
            if(strlen($mensagem) <= 50 && strlen($mensagem) >= 10){
                $erroMSG = "Mensagem de até 50 caracteres";
            }
        }

        if(($erroNome == "") && ($erroSNome == "") && ($erroEmail == "") && ($erroTelefone == "") && ($erroMSG == "")){
            header('Location: enviado.php');
        }
    }

    //Funcoes de segurança para os inputs do POST
    function segurancaDoPOST($valor){
        $valor = trim($valor);
        $valor = stripslashes($valor);
        $valor = htmlspecialchars($valor);

        return $valor;
    }

?>