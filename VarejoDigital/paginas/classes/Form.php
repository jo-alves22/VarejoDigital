<?php 

class Form{

    public static function alert($tipo, $mensagem){

        if($tipo == 'erro'){
            echo '<div style=" background:#343a40; color:#ffba08; font-size:15px; padding: 15px; max-width: 400px;">' . $mensagem .'</div>';
            
            return false;

        } elseif($tipo == 'sucesso'){
            echo '<div style=" background:#d9ed92; color:green; font-size:15px; padding: 15px; max-width: 400px;">' . $mensagem .'</div>';
            
            return true;
        }
    }

    public static function cadastrar($nome, $cpf_cnpj, $email, $endereco, $cidade, $senha, $usuario){
        
        $sql = Mysql::varejo_digital()->prepare("INSERT INTO `Usuario` VALUES (null,?,?,?,?,?,?,?)");

        $sql->execute(array($nome, $cpf_cnpj, $email, $endereco, $cidade, $senha, $usuario));

        // Evita inserções indevidas
        $sql = Mysql::varejo_digital()->end;
       
    }

    public static function cadastrar_prod($nome_prod, $preco, $unidade, $categoria){

        $sql = Mysql::varejo_digital()->prepare("INSERT INTO `Outra_TBL_Prod` VALUES (null,?,?,?,?)");

        $sql->execute(array($nome_prod, $preco, $unidade, $categoria));

        $sql = Mysql::varejo_digital()->end;
    }



    /*
    public static function cadastrar_prod($nome_prod, $preco){
        $sql = Mysql::varejo_digital()->prepare("INSERT INTO `Produtos` VALUES (null,?,?)");
        $sql->execute(array($nome_prod, $preco));
        $sql = Mysql::varejo_digital()->end;
    }

    public static function cadastrar_unid($unidade){
        $sql = Mysql::varejo_digital()->prepare("INSERT INTO `Unidade_Medida` VALUES (null,?)");
        $sql->execute(array($unidade));
        $sql = Mysql::varejo_digital()->end;
    }

    public static function cadastrar_cat($categoria){
        $sql = Mysql::varejo_digital()->prepare("INSERT INTO `Categoria` VALUES (null,?)");
        $sql->execute(array($categoria));
        $sql = Mysql::varejo_digital()->end;
    }
    */
}

?>