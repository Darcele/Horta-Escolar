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
        <link rel = "icon" href = "imagens/logo_.ico" width="40" height="40">
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
        <img src="imagens/logo_.png" class="img-rounded" alt="Cinque Terre" width="150" height="100" align="top" >
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
        <h3>
            O Projeto Horta Escolar iniciou-se em 2016 no Campus do CEFET Maria da Graça por intermédio da Professora Luciana e da Professora Fabiana. 
            Nosso projeto consiste na implementação e manutenção de uma horta orgânica no âmbito escolar em que os horticultores são os próprios alunos, um deles é o bolsista e os outros são os voluntários. Os alimentos colhidos são encaminhados para a cozinha da escola Horácio Macedo, que fica localizada no Campus e que oferece refeições aos alunos do CEFET.
        </h3>
        <br>
        
        <h3> 
            Fundadoras
        </h3>

        <h3>
            Professora Luciana Ferrari Espíndola Cabral 
        </h3>
        <img src="../imagens/luciana.jpg" width="80" height="100">
        <h4>
        Licenciada em Ciências Biológicas pela Universidade Federal do Rio de Janeiro -UFRJ (2004), possui Especialização em Ensino de Ciências pelo Instituto Federal de Educação Ciência e Tecnologia do Rio de Janeiro - IFRJ (2011) e Mestrado em Botânica pela Escola Nacional de Botânica Tropical - ENBT / JBRJ (2007). 
        Doutoranda em Educação em Ciências e Saúde pelo NUTES - UFRJ, ligada ao Laboratório de Vídeo Educativo e professora EBTT do CEFET-RJ, onde realiza atividades de ensino, pesquisa e extensão. 
        </h4>
        <br>
        <h3>
            Professora Fabiana Cordeiro 
        </h3>
        <h4>
        Possui graduação em Biologia pela Universidade Federal Rural do Rio de Janeiro (2005), mestrado em Microbiologia pela Universidade do Estado do Rio de Janeiro (2008) e doutorado em Microbiologia Médica Humana pela Universidade do Estado do Rio de Janeiro (2012). Tem experiência em técnicas como qPCR e clonagem molecular. 
        Atualmente é professora do ensino básico,técnico e tecnológico do Centro Federal de Educação Tecnológica Celso Suckow da Fonseca. 
        </h4>
        <br>
        <h3 color-text = blue>
            Colaboradores 
        </h3>
        
        <h3>
            Nutricionista Juliana Ramadas 
        </h3>
        <img src="../imagens/juliana.jpg" width="80" height="100">
        <h4>
        Licenciada em Educação Física pela Universidade Federal do Rio de Janeiro (2006), bacharel em Nutrição pela Universidade Federal do Estado do Rio de Janeiro (2011) e mestre em Nutrição Humana pela Universidade Federal do Rio de Janeiro (2015). Atualmente é nutricionista e responsável pelo NAPNE- Núcleo de Apoio à Pessoas com Necessidades Específicas do Centro Federal de Educação Tecnológica Celso Suckow da Fonseca- CEFET/RJ- unidade Maria da Graça. Trabalha realizando avaliação antropométrica, 
        composição corporal, prescrição dietoterápica e atividades de educação nutricional com servidores e alunos da instituição. 
        </h4>
        <br>
        <h3>
            Professor Carlos Eduardo Pantoja
        </h3>
        <img src="../imagens/pantoja.jpg" width="80" height="100">
        <h4>
        Eu sou professor e pesquisador do Centro Federal de Educação Tecnológica do Rio de Janeiro (CEFET/RJ), sou formado em Tecnologia de Informática pelo Centro Universitário da Cidade e bacharel em Administração Industrial pelo CEFET/RJ. Possuo mestrado em Sistemas e Computação pelo Instituto Militar de Engenharia (IME) e atualmente é doutorando bolsista da CAPES em Computação pela Universidade Federal Fluminense (UFF) e doutorando sandwich pela Sorbonne Universités - Pierre et Marie Curie (UPMC) conhecida como Paris-6. Também fui Analista de Tecnologia da Informação do CEFET/RJ entre 2005 e 2009. Em concursos públicos, na área de Informática e Tecnologia, fui aprovado nas primeiras colocações para as universidades UFF, UFRJ, UNIRIO (para cargos de nível superior) e no CEFET/RJ (3x) para os cargos de técnico, analista e professor. Basicamente, atuo na área de Inteligência Artificial, mais especificamente em Sistemas Multi-agentes, e Engenharia de Software, mas tenho me aventurado pelas área de Robótica, Computação Ubíqua e na Internet das Coisas ou Internet of Things (IoT). Também tem o lado Administrador que é focado no Marketing e em modelos de negócio de divulgação tecnológica (e atualmente mídias sociais), inovação tecnológica e empreendedorismo. De vez em quando atuo na área de Governança da Tecnologia da Informação. 
        Então resumindo: basicamente tudo que eu faço é um laboratório real para eu colocar em prática e testar minhas ideias (normais ou não).
        </h4>
        <br>
        <h3>
            Professor Leandro Samyn 
        </h3>
        <h4>
        Possui graduação em Engenharia Eletrônica pela Universidade do Estado do Rio de Janeiro (2007) e mestrado em Engenharia Eletrônica pela Universidade do Estado do Rio de Janeiro (2010). Atualmente é professor do Cefet-RJ (DE). Foi engenheiro eletricista/eletrônico (RT) pela Fratex Bras Serviços e Projetos On & Offshore Ltda., professor da Escola Naval (EN), docente do Centro de Instrução Almirante Graça Aranha (CIAGA) e docente da Universidade Cândido Mendes (UCAM). Tem experiência em eletrônica analógica aplicada, eletrônica digital, controle, automação, instrumentação e instalações elétricas em área classificadas (potencialmente explosivas) em fábricas, navios e unidades de produção e perfuração offshore. 
        Atuou na adequação de instalações elétricas à NR10 e adequação e projeto de instalações elétricas em atmosferas explosivas.
        </h4>
        <br>
        <h3>
            Professor Alberto Boscarino 
        </h3>
        <h4>
            Possui graduação em Licenciatura em Educação Artística Habilidade MúsiCA pela Universidade Federal do Estado do Rio de Janeiro (2002), mestrado em Música pela Universidade Federal do Estado do Rio de Janeiro (2006) e doutorado em Música pela Universidade Federal do Estado do Rio de Janeiro (2011). Atualmente é professor de educação musical no CEFET/RJ, Campus Maria da Graça. Na atualidade exerce a função de Gerente Acadêmico do Campus Maria da Graça (CEFET/RJ). Tem experiência na área de Artes, com ênfase em Musicologia, 
            atuando principalmente nos seguintes temas: música popular - brasil, fado, educação musical, Rio de Janeiro e música brasileira. 
        </h4>
    
        <br>
        <h3>
            Aluna Bolsista
        </h3>
        <h4>
            Darcele Christo Leão
        </h4>
        <br>
        <h3>
            Alunas de Iniciação Científica
        </h3>
        <h4>
            Mariana Peixoline Borges
        </h4>
        <br>
        <h4>
            Laryssa Ferreira
        </h4>
<br>
<br>


        
    </div>
    </body>
</html>