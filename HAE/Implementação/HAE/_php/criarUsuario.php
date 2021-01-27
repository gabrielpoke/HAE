<?php 
class Usuario extends Pessoa
{
  private $nomeUsuario;
  private $senha;
}

class Pessoa 
{
  private $nome;
  private $CPF;
  private $curso;
  private $matricula;
  
}

class Endereco 
{
  private $rua;
  private $bairro;
  private $cidade;
}

function criarUsuario()
{

  if(isset($_POST['submit']))
  {

    require_once("conexao.php");
    $conexao=ConectarBD();


    $query1 = "SELECT COUNT(*) FROM TB_PESSOA;";
    $rows = pg_query($conexao,$query1) or die("Erro"); 

    $nome = $_POST['nome'];
    $CPF = $_POST['cpf'];
    $matricula = $_POST['matricula'];
    $nomeUsuario = $_POST['nomeUsuario'];
    $senha = $_POST['senha'];
    $cargo = $_POST['cargo'];
    
    $query="INSERT INTO TB_PESSOA (nm_nome, nm_cpf,nm_matricula,nm_nome_usuario,nm_senha, nm_cargo) VALUES ('$nome', '$CPF', '$matricula', '$nomeUsuario', '$senha', '$cargo');";
    
    $resultado = pg_query($conexao,$query) or die("Erro");
    $nr = pg_num_rows($resultado);

    if($resultado)
    {
      header("Location: ./administrador.php");
    }

  }
}

criarUsuario();



?>