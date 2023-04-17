<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: index.php");
        exit;
    }
?> 
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
	<title>Gerenciador de empréstimos de dispositivos</title>
			<link rel="stylesheet" type="text/css" href=".\style\style.css">
			<link rel="icon" href="https://img.icons8.com/external-icongeek26-outline-icongeek26/256/external-education-education-icongeek26-outline-icongeek26-1.png" type="image/x-icon">
</head>

<body>
<!--Cabeçalho -->  
	<header>
    
        <div class="cps-header__logo">
            <a href="https://fatecararas.cps.sp.gov.br/" rel="home" title="Fatec Araras"><a href="https://fatecararas.cps.sp.gov.br/" class="custom-logo-link" rel="home" aria-current="page"><img width="280" height="75" src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/19/2022/11/fatec_ra_campinas__araras_e_marilia__editavel_araras.png" class="custom-logo" alt="Fatec Araras" /></a></a>
        </div>     
    
  </header>  
  <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #a51b0b;">
  
    <div class="collapse navbar-collapse justify-content-end mx-auto" style="height: 50px;">
        <ul>

            <li>
                <a href="https://github.com/Lvolsi/Projeto_gerenciador_de_emprestimos_de_dispositivos"
                    style="color: #ffffff; font-size: 18  px; margin-top: 50px;">Sobre nós</a>
            </li>

        </ul>
    </div>
</nav>

<h5>ID do empréstimo:</h5>
<form method="post" action="cadastrar-enquete.php">
<select name="qtd">
<option value="bota">01</option>
<option value="fla">02</option>
<option value="flu">03</option>
<option value="vasco">04</option>
<option value="bota">05</option>
<option value="fla">06</option>
<option value="flu">07</option>
<option value="vasco">08</option>
<option value="bota">09</option>
<option value="fla">10</option>
<option value="flu">11</option>
<option value="vasco">12</option>
</select>
</form>

<h5>Data da devolução:</h5>
<input id="date" type="date">

<h5>Hora da devolução:</h5>
<input type="time" id="appt" name="appt">

<h5>Observações:</h5>
<input type="text" name="Observações:" size="250" /> 

<button class="btn btn-primary" type="button">Realizar devolução</button>

</body>
