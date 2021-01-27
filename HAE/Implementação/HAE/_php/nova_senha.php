<?php

function novaSenha()
{
    require_once("conexao.php");
    $conexao=ConectarBD();

    if(isset($_POST['submit']))
    {
        $nomeUsuario = $_POST['nomeUsuario'];
        $novaSenha = $_POST['newSenha'];

        $query="UPDATE TB_PESSOA 
        SET nm_senha = '$novaSenha'
        WHERE nm_nome_usuario= '$nomeUsuario';";    

        $resultadoUser = pg_query($conexao,$query) or die("Erro");
        if($resultadoUser)
        {
            header("Location: ../index.html");
        }
    }

}
novaSenha();
?>