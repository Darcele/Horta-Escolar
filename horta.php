<?php
/*
    //phpinfo();
   $servername = "localhost";
   $username = "cefet";
   $password = "cefet123";
       
   // Faz a conexao com o banco de dados
       
   try {
       $conn = new PDO("mysql:host=$servername;dbname=docs", $username, $password);
       $conn->exec('SET NAMES utf8');
   }
   catch(PDOException $e)
   {
       exit ("Connection failed: " . $e->getMessage());
   }
*/ 
?>


<!DOCTYPE html>
    <head>
        <meta charset = "utf-8">
        <title>Horta Escolar</title>
        <link rel = "icon" href = "logo_.ico" width="40" height="40">
        <script src = "js/jquery.js"></script>
        <link rel = "stylesheet" href = "css/bootstrap.css">
        <link rel = "stylesheet" href = "css/design.css">
        <link rel = "stylesheet" href = "css/bootstrap.map.css">
        <script src = "js/bootstrap.js"></script>
    </head>
    <body>
    <div class="jumbotron">
        <br>
        <br>
        <br>
        <div class="container">  
        <img src="logo_.png" class="img-rounded" alt="Cinque Terre" width="150" height="100" align="top" >
        <h1>Horta Escolar&nbsp;&nbsp;&nbsp;</h1>  
        </div>
    </div>
    <div class="container">
    <ul class="nav nav-pills nav-justified">
  <li class="active"><a href="horta.php">O Projeto</a></li>
  <li><a href="aulas.php">Aulas</a></li>
  <li><a href="consciencia.php">Consciência Ambiental</a></li>
  <li><a href="alimentacao.php">Alimentação Saudável</a></li>
  <li><a href="inter.php">Interdisciplinalidade</a></li>
  <li><a href="producao.php">Produção Acadêmica</a></li>
</ul>

<br>
<br>
        <h3>O Projeto Horta Escolar iniciou-se em 2016 no Campus do CEFET Maria da Graça por intermédio da Professora Luciana e da Professora Fabiana. 
        Nosso projeto consiste na implementação e manutenção de uma horta orgânica no âmbito escolar em que os horticultores são os próprios alunos, um deles é o bolsista e os outros são os voluntários. Os alimentos colhidos são encaminhados para a cozinha da escola Horácio Macedo, que fica localizada no Campus e que oferece refeições aos alunos do CEFET.
        </h3>
        <br>
        <br>
        <!--<a href="conhecer.php" button type="button" class="btn btn-success" align="center">Conheça a Horta</button></a>-->
    </div>
    </body>
</html>