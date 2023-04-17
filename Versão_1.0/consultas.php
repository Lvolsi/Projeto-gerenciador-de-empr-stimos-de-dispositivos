<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: index.php");
        exit;
    }
?> 
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
	<title>Gerenciador de empréstimos de dispositivos</title>
			<link rel="stylesheet" type="text/css" href=".\style\style.css">
			<link rel="icon" href="https://img.icons8.com/fluency/256/technology-items.png" type="image/x-icon">
</head>

<body>
<!--Cabeçalho -->  
	<header id="cps-header">
    
        <div class="cps-header__logo">
            <a href="https://fatecararas.cps.sp.gov.br/" rel="home" title="Fatec Araras"><a href="https://fatecararas.cps.sp.gov.br/" class="custom-logo-link" rel="home" aria-current="page"><img width="280" height="75" src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/19/2022/11/fatec_ra_campinas__araras_e_marilia__editavel_araras.png" class="custom-logo" alt="Fatec Araras" /></a></a>
        </div>     
    
  </header>  
  <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #a51b0b;">
  
    <div class="collapse navbar-collapse justify-content-end mx-auto" style="height: 50px;">
        <ul class="navbar-nav">

            <li class="navbar-item">
                <a href="https://github.com/Lvolsi/Projeto_gerenciador_de_emprestimos_de_dispositivos" class="nav-link"
                    style="color: #ffffff; font-size: 18  px; margin-top: 50px;">Sobre nós</a>
            </li>

        </ul>
    </div>
</nav>

<h4>Selecione o dia e hora desejadas para realizar a consulta de dispositivos disponíveis para empréstimos:</h4>


<h5>Data:</h5>
<input id="date" type="date">

<h5>Período de utilização:</h5>
<form method="post" action="cadastrar-enquete.php">
<select name="qtd">
<option value="bota">19h00 às 20h40</option>
<option value="fla">20h40 às 22h30</option>
<option value="flu">19h00 às 22h30</option>

</select>
</form>

<button class="btn btn-primary" type="button">Realizar consulta</button>

</body>