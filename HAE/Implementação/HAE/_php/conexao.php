<?php
    function ConectarBD()
    {
       $host = "host=localhost";
       $port = "port=5432"; 
       $dbname = "dbname=HAE";
       $user = "user=postgres";
       $password = "password= We@300895";
       
       $bd = pg_connect("$host $port $dbname $user $password");

        if(!$bd)
        {
            echo"Erro: ".pg_last_error();
        }
        else
        {
            return $bd;
        }
        
    }


?>