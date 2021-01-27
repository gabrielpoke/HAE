<?php
class Cronograma
{
  private $nome;
  private $horario;
  private $mes;
  private $totalAulas;
  
    
        require_once("conexao.php");
        $conn=ConectarBD();

          If ($conn)
            {
              echo "++ Conexão com o PostgreSQL realizada com sucesso!!<br /><br/>";

              $i=0;

              $sql = "INSERT INTO TB_CRONOGRAMA (CD_CODIGO, NM_ATIVIDADE,
              NM_MES, NM_HORARIO) VALUES (++$i, $nome , $mes , $horario)";
        
              pg_query($conn, $sql);
              echo "++Registro inserido com sucesso!!";

              pg_close($conn);
          }
          else
          {
                echo "++ Falha na conexão com o PostgreSQL!!";
          }
     
}
?>