<?php

function autenticaUsuario(){

    if(isset($_POST['submit']))
    {
      $login = $_POST['login']; 
      $senha = $_POST['senha'];
  
    }
 
    require_once("conexao.php");
    $conexao=ConectarBD();
    $query ="SELECT nm_nome_usuario, nm_senha, nm_cargo FROM TB_PESSOA WHERE nm_nome_usuario = '$login';";
    $resultado = pg_query($conexao,$query) or die("Erro");
    $nr = pg_num_rows($resultado);
    if($nr>0)
    {
      while($dados=pg_fetch_array($resultado))
      {
        if($login == $dados['nm_nome_usuario'] && $senha == $dados['nm_senha'] && $dados['nm_cargo'] == 'Professor' )
        {
          header("Location: ./professor.php");  
        }
        elseif($login == $dados['nm_nome_usuario'] && $senha == $dados['nm_senha'] && $dados['nm_cargo'] == 'Administrador')
        {
          header("Location: ./administrador.php");
        }
        elseif($login == $dados['nm_nome_usuario'] && $senha == $dados['nm_senha'] && $dados['nm_cargo'] == 'Diretor')
        {
          header("Location: ./diretor.php");
        }
        elseif($login == $dados['nm_nome_usuario'] && $senha == $dados['nm_senha'] && $dados['nm_cargo'] == 'Coordenador')
        {
          header("Location: ./coordenacao.php");
        }
        else
        {
          header("Location: ../index.html");
        } 
      }
    }
  }
  autenticaUsuario();
?>