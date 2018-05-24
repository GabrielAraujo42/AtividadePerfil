<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        include_once('header.php');
    ?>
</head>
<body class="back-register">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">

    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../index.php"> Início</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="title">
    <span>Gabriel Araújo Neubern de Oliveira</br></span>
    Contato:
    <div class="texto2">
        <span>Data de Nascimento: 04/11/1998</br><span>
        <span>Email: gabrieloliveira42@hotmail.com</br></span>
    </div>
    Escolaridade:
    <div class="texto2">
        <span>Faculdade de Tecnologia de São Paulo (FATEC) – Unidade Taubaté</br><span>
        <span>Curso: Tecnólogo em Análise e Desenvolvimento de Sistemas – Período noturno</br><span>
        <span>Previsão de conclusão: dezembro de 2018</br><span>
    </div>
    Certificados:
    <div class="texto2">
        <span><a href="http://localhost:8088/perfil/files/Certificado_Setor_de_Games.pdf"> O setor de games no Brasil </a></br></span>
        <span><a href="http://localhost:8088/perfil/files/Certificado_Java.pdf"> Java básico </a></br></span>
        <span><a href="http://localhost:8088/perfil/files/Certificado_Modelagem_de_Dados.pdf"> Modelagem de Dados </a></br></span>
    </div>
    Experiência Profissional:
    <div class="texto2">
        <span>Embras - Departamento de Finanças e Suprimentos</br></span>
        <span>Atividades: Atendimento de clientes por telefone e chat;</br>
            Banco de Dados;
        </span>
    </div>
    
</div>

<footer class="main-footer footer-landpage">
    
    <div class="pull-right hidden-xs">
        <div style="text-align: right">
            <strong>Curso de Análise e Desenvolvimento de Sistemas&nbsp; &nbsp; &nbsp;</strong>
            <br>
            Desenvolvido por: Gabriel A N de Oliveira&nbsp; &nbsp; &nbsp;
        </div>
    </div>
    <strong>
        &nbsp; &nbsp; &nbsp;Fatec Taubaté
    </strong>
    <br>
      
    &nbsp; &nbsp; &nbsp;&copy; <?php echo date ('Y'); ?>. Todos os direitos reservados.
      
</footer>

<?php
    include_once('js.php');
?>
</body>
</html>