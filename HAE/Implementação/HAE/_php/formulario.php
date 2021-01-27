<?php 
class CriaNovoProjeto
{
  private $nomeProjeto;
  private $descricaoProjeto;
  private $referencias;
  private $nomeProfessor;

  if(isset($_POST['submit']))
  {
    
  }


  private function criaProjeto()
  { 
          header('Location:./_html/novoProjeto.html'); 
        require_once("conexao.php");
        $conn=ConectarBD();
        If ($conn)
        {   
            $i = 0;
            $c = 0;

            echo "++ Conexão com o PostgreSQL realizada com sucesso!!<br /><br />";

            $sql = "INSERT INTO TB_PROJETO (CD_CODIGO,NM_TIPO_PROJETO,VL_QUANT_PROJETO ) VALUES (++$i , $descricaoProjeto , ++$c )";

            pg_query($conn, $sql);
            echo "++Registro inserido com sucesso!!";

            pg_close($conn);
        
        }
        else
        {
              echo "++ Falha na conexão com o PostgreSQL!!";
        }
       
  } 
  }
}
?>