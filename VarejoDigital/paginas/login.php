
<?php 

session_start();

ob_start();  /*Limpando buffer de saida para evitar erros de redirecionamento*/

include_once 'config.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/login.css">
   
    <title>Login</title>
</head>

<body>
    <?php
        // Exemplo de criptografia de senha

        // echo password_hash(123456, PASSWORD_DEFAULT);
    ?>


    <?php
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if(!empty($dados['logar'])){

            $query_email = "SELECT id_usuario, nome, email, senha
                    FROM `Usuario`
                    WHERE email =:email
                    LIMIT 1";

            $result_usuario = Mysql::varejo_digital()->prepare($query_email);

            $result_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);

            $result_usuario->execute();

            // Se encontrado usuário e quantidade de usuário for firerente de 0.
            if($result_usuario AND $result_usuario->rowCount() != 0){
                
                $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);

                // Comparar a senha forncida com a do banco.
                if(password_verify($dados['senha'], $row_usuario['senha'])){  

                    $_SESSION['id_usuario'] = $row_usuario['id_usuario'];
                    $_SESSION['nome'] = $row_usuario['nome'];

                    header("Location: dashboard_VD.php");                    

                  /*  if($dados['senha'] == '1'){
                        header("Location: dashboard_VD.php");
                    } else{
                        header("Location: dashboard_Vendedor.php");
                    } */

                } else{
                    $_SESSION['msg'] = '<div style=" background:#ffba08; color:9d0208; font-size:15px; padding: 15px; max-width: 400px;"> Erro: Senha inválida! </div>';
                }

            } else{

                $_SESSION['msg'] = '<div style=" background:#ffba08; color:9d0208; font-size:15px; padding: 15px; max-width: 400px;"> Erro: Ususário inválido! </div>';
            }
        }

        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);  /*Destruir a mensagem após a exibição*/
        }

    ?>

    <div class="login">

        <section class="plataforma">
            <h2>VAREJO</h2>
            <H1>DIGITAL</H1>
        </section>

        <section class="user">
            <h2>O seu Varejo Digital</h2>

            <Form action="" method="POST">

                <input type="text" name="email" placeholder="Usuário"><br><br>
                <input type="text" name="senha" placeholder="Senha"><br><br>

                <input class="logar" name="logar" type="submit" value="Logar"><br><br>

                <input type="reset" value="Esqueci minha senha">
            </Form>

            <div class="home"><a href="../varejo.php">Home</a></div>
        </section>
    </div>
</body>
</html>