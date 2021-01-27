<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../_css/coordenacao.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <center>
        <br><br><br>
        <div id="divBusca">
            <img src="../_img/585e4ae1cb11b227491c3393.png" id='lupa' alt="Buscar..."/>
            <input type="text" id="txtBusca" placeholder="Buscar..."/>
            <button id="btnBusca">Buscar</button>
        </div>
        <div class="container">
        <h1>Projetos a serem aprovados</h1><br><br>
        <?php

        require_once("conexao.php");
        $conexao=ConectarBD();

        $query = "SELECT 

        V.CD_CODIGO AS CODIGO_PROFESSOR,
        V.NM_NOME_PROJETO AS NOME_PROJETO,
        V.VL_HORAS_PROJETO AS HORAS_PROJETO
        FROM TB_PROFESSOR AS V
        
        INNER JOIN TB_PROJETO AS  E
        ON V.CD_CODIGO=E.CD_CODIGO;";

        $resultado = pg_query($conexao,$query) or die("Erro");
        $nr = pg_num_rows($resultado);

        if($nr>0)
        {
            
        echo"<div class='table-responsive'>";          
        echo"<table class='table'>";
        echo"<thead>";
        echo"<tr>";
        echo"<th>#</th>";
        echo"<th>Nome do Projeto</th>";
        echo"<th>Professor</th>";
        echo"<th>Horas Projeto</th>";
        echo"<th>Verificar</th>";
        echo"</tr>";
        echo"</thead>";
        echo"<tbody>";
        echo"<tr>";
        while($dados=pg_fetch_array($resultado))
        {
             echo"<tr><td>".$dados["cd_codigo"]."</td>";
             echo"<td>".$dados["nome_projeto"]."</td>";
             echo"<td>".$dados["horas_projeto"]."</td>";
             echo"<td><a href=''>Projeto</a></td>";
             echo"</tr>";
        }

            echo"</tbody>";
            echo"</table>";
            echo"</div>";
            echo"</div>";
            
            
        }
        else
        {
            echo"Não há dados";
        }

        
        
        
        ?>
    </center>
</body>
</html>

<?php
class Coordenador extends Pessoa
{
  
}


?>
