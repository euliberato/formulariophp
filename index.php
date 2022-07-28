<?php
    include('validacao.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="tela">
        <h1>Formulário</h1>
        <form action="" method="POST">

            <!--Nome usuário-->
            <p>Nome:</p>
            <input type="text" name="nome" id="" <?php if(!empty($erroNome)){echo "class=invalido";}?> <?php if(isset($_POST['nome'])){echo "value='".$_POST['nome']."'";}?>>
            <br>
            <span class="erro"><?php echo $erroNome; ?></span>

            <p>Sobrenome:</p>
            <input type="text" name="snome" id="" <?php if(!empty($erroSNome)){echo "class=invalido";}?> <?php if(isset($_POST['snome'])){echo "value='".$_POST['snome']."'";}?>>
            <br>
            <span class="erro"><?php echo $erroSNome; ?></span>

            <!--Contato-->
            <p>E-mail:</p>
            <input type="email" name="email" id="" placeholder="Ex: nome@email.com" <?php if(!empty($erroEmail)){echo "class=invalido";}?> <?php if(isset($_POST['email'])){echo "value='".$_POST['email']."'";}?>>
            <br>
            <span class="erro"><?php echo $erroEmail; ?></span>

            <p>Telefone:</p>
            <input type="tel" name="telefone" id="" placeholder="Ex: (11) 1111-1111" <?php if(!empty($erroTelefone)){echo "class=invalido";}?> <?php if(isset($_POST['telefone'])){echo "value='".$_POST['telefone']."'";}?>>
            <br>
            <span class="erro"><?php echo $erroTelefone; ?></span>

            <!--Texto-->
            <p>Mensagem:</p>
            <input type="text" name="texto" id="" placeholder="Max: 50 caracteres" <?php if(!empty($erroMSG)){echo "class=invalido";}?> <?php if(isset($_POST['texto'])){echo "value='".$_POST['texto']."'";}?>>
            <br>
            <span class="erro"><?php echo $erroMSG; ?></span>
            <br>
            <input type="submit" value="Enviar">

        </form>
    </div>

</body>
</html>