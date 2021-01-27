<?php 
class CriaNovoProjeto
{
  private $nomeProjeto;
  private $descricaoProjeto;

  public function CriaProjeto()
  {
   
        header('Location:./_html/novoProjeto.html'); 
          require_once("conexao.php");
          $conn=ConectarBD();

            If ($conn)
            {
                echo "++ Conexão com o PostgreSQL realizada com sucesso!!<br /><br />";
                $i = 0;
  
                $sql = "INSERT INTO TB_PROJETO (CD_CODIGO , NM_TIPO_PROJETO , VL_QTDE_PROJETO ) VALUES (++$i , $nomeProjeto ,  $descricaoProjeto)";

                pg_query($conn, $sql);
                echo "++Registro inserido com sucesso!!";

                pg_close($conn);
            
            }
            else
            {
                  echo "++Falha na conexão com o PostgreSQL!!";
            }
  }
 }

?>