<?php 

    include('config.php');

    Mysql::varejo_digital();

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/usuario.css">

    <title>Cadastro de Usuário</title>
</head>

<body>

    <?php
        if(isset($_POST['cadastrar']) && $_POST['form'] == 'f_form'){

            $nome = $_POST['nome'];
            $cpf_cnpj = $_POST['cpf_cnpj'];
            $email = $_POST['email'];
            $endereco = $_POST['endereco'];
            $cidade = $_POST['cidade'];
            $senha = $_POST['senha'];
            $usuario = $_POST['usuario'];

            if($nome == ''){
                Form::alert('erro', 'O nome esta vazio!');  
            } elseif($cpf_cnpj == ''){
                Form::alert('erro', 'O registro esta vazio!'); 
            } elseif($email == ''){
                Form::alert('erro', 'O email esta vazio!');
            } elseif($endereco == ''){
                Form::alert('erro', 'O endereço esta vazio!');
            } elseif($cidade == ''){
                Form::alert('erro', 'A cidade esta vazia!');
            } elseif($senha == ''){
                Form::alert('erro', 'A senha esta vazia!');
            } elseif($usuario == ''){
                Form::alert('erro', 'O usuario esta vazio!');
            } else{

                Form::cadastrar($nome, $cpf_cnpj, $email, $endereco, $cidade, $senha, $usuario);
                Form::alert('sucesso','Usuário '  . $nome . ' cadastrado com sucesso!!');
            }
        }
    ?>

    <div class="cadusuario">
        <section class="dados">

            <h1>CADASTRO DE USUÁRIOS</h1>
            <form method="POST">

                <input type="text" name="nome" placeholder="Nome">
                <input type="text" name="cpf_cnpj" placeholder="CPF/CNPJ">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="endereco" placeholder="Endereço">
                <input type="text" name="cidade" placeholder="Cidade">
  
                <input type="text" name="senha" placeholder="Senha"><br><br>

                <label class="form-label">Cliente</label>
                <input type="radio" name="usuario" value="1" style="width: 30px;" require>
                <label class="form-label">Vendedor</label>
                <input type="radio" name="usuario" value="0" style="width: 30px;">
                
                <br><br>
                <input class="cadastrar" type="submit" name="cadastrar" value="Cadastrar">

                <!-- hiden não exibe no front -->
                <div><input type="hidden" name="form" value="f_form"></div>
            </form>
        </section>

        <section class="aside">
            <h2>VAREJO</h2>
            <H1>DIGITAL</H1>
        </section>
    </div>
</body>
</html>