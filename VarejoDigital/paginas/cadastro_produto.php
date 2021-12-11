<?php 

    include('config.php');

    Mysql::varejo_digital();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/produto.css">

    <title>Cadastro de Produtos</title>
</head>

<body>
    <?php

        if(isset($_POST['cadastrar']) && $_POST['form'] == 'f_form'){

            
            $nome_prod = $_POST['nome'];
            $preco = $_POST['preco'];
            $unidade = $_POST['unidade'];   // Tabela Unidade de Medida
            $categoria = $_POST['categoria'];  // Tabela Categoria
           
            /*
            if($nome_prod == ''){
                Form::alert('erro', 'O nome esta vazio!');
            } elseif($preco == ''){
                Form::alert('erro', 'O preço esta vazio!');
            } else{
                Form::cadastrar_prod($nome_prod, $preco);
                Form::alert('sucesso','Produto ' . $nome . ' cadastrado com sucesso!!');
            }

            if($unidade == ''){
                Form::alert('erro', 'A unidade esta vazio!');
            } else{
                Form::cadastrar_unid($unidade);
            }

            if($categoria == ''){
                Form::alert('erro', 'A categoria esta vazio!');
            } else{
                Form::cadastrar_cat($categoria);
            }
            */

            if($nome_prod == ''){
                Form::alert('erro', 'O nome esta vazio!');
            } elseif($preco == ''){
                Form::alert('erro', 'O preço esta vazio!');
            } elseif($unidade == ''){
                Form::alert('erro', 'A unidade esta vazio!');
            } elseif($categoria == ''){
                Form::alert('erro', 'A categoria esta vazio!');
            } else{
                Form::cadastrar_prod($nome_prod, $preco, $unidade, $categoria);
                Form::alert('sucesso','Produto ' . $nome . ' cadastrado com sucesso!!');
            }
        }
    ?>

    <div class="cadproduto">
        <section class="info">

            <h1>CADASTRO DE PRODUTOS</h1>

            <form method="POST">
                <input type="text" name="nome" placeholder="Nome do produto">
                <input type="text" name="unidade" placeholder="Unidade de medida">
                <input type="text" name="categoria" placeholder="Categoria">
                <input type="text" name="preco" placeholder="Preço">
                       
                <br><br>
                <input class="cadastrar" type="submit" name="cadastrar" value="Cadastrar">
                <!-- <div class="modal-dialog modal-sm">...</div> -->


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