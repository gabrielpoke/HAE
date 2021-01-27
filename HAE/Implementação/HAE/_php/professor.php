<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../_css/professor.css">
    <title>HAE Professor</title> 
</head>
<header>
    <div id ='imageLogo'>
        <center>
             <img src="https://vestibulandoansioso.com/wp-content/uploads/2014/07/Vestibular-Fatec.jpg" height="100" width="200">
        </center>
     </div>
</header> 
     
<body>
    
        
    <center>
        <div id="divBusca">
            <img src="../_img/585e4ae1cb11b227491c3393.png" id='lupa' alt="Buscar..."/>
            <input type="text" id="txtBusca" placeholder="Buscar..."/>
            <button id="btnBusca">Buscar</button>
        </div>
    </center>
    
    <div id='InformacoesDaInstituicao'>
        <p text-aling="center">
            O Google surgiu no ano de 1998, como uma empresa privada, e com a missão de organizar a informação mundial e torná-la universalmente acessível e útil. Quase oito anos depois de sua fundação, a empresa mudou-se para sua atual sede, em Mountain View, no estado da Califórnia.
        </p>
        <p>
            O termo Google tem origem na matemática, google vem de googol, que é o número 10100, ou seja, o dígito 1 seguido de cem zeros. O googol não tem qualquer utilidade, a não ser para explicar a diferença entre um número imenso e o infinito, e devido a sua magnitude, os fundadores da empresa Google resolveram adaptar o termo para dar o nome a sua empresa.
        </p>
        <p>
            O Google é executado através de mais de um milhão de servidores em data centers ao redor do mundo e processa mais de um bilhão de solicitações de pesquisa e vinte petabytes de dados gerados por usuários todos os dias. 
        </p>
    </div>
    <form method="post" action="?">
        <div id='Cronograma'>
            <center>
                <label> <h3>Cronograma</h3> </label>
                <input type="date">
            </center>
        </div>
        <div id='Aprovados'>
            <label> <h3> Projetos Aprovados </h3> </label>
            <textarea id="aprovados" name="aprovados" rows="5" cols="33"></textarea><br>
        </div>
        <div id='boxReprovados'>
            <label> <h3> Projetos Reprovados </h3> </label>
            <textarea id="reprovados" name="reprovados" rows="5" cols="33"></textarea><br><br>
        </div>
            <center>
              <?php
  
                if(isset($_POST['solicitarProjeto'])) { 
                      header('Location: ../_html/formulario.html'); 
                } 
              ?>  
                
                <input type="submit" name="solicitarProjeto" value="Solicitar Projeto"/> 
              </form>  
 

 
            </center>
    </form>
</body>
</html>
 

