<?php
    require('conexao_banco.php');
    require('dev.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
	<title>Gerenciador de empréstimos de dispositivos</title>
		<link rel="icon" href="https://img.icons8.com/external-icongeek26-outline-icongeek26/256/external-education-education-icongeek26-outline-icongeek26-1.png" type="image/x-icon">
<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-light" style=" background-color: #e4e4e4">
    <a href="https://fatecararas.cps.sp.gov.br/" rel="home" title="Fatec Araras">
    <a href="https://fatecararas.cps.sp.gov.br/" class="custom-logo-link" rel="home" aria-current="page">
    <img width="280" height="75" src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/19/2022/11/fatec_ra_campinas__araras_e_marilia__editavel_araras.png" class="custom-logo" alt="Fatec Araras" /></a></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://github.com/Lvolsi/Projeto_gerenciador_de_emprestimos_de_dispositivos">Sobre nós</a>
      </li>
  </ul>
</nav>

<body>
    <div>
        <br>
        <h7><strong>Empréstimos ativos:</strong> <br> </h7>
        <br>
    </div>

    <div>
        <form class="form-outline mb-4" method="post" action="dev.php">           
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col"> </th>
                    <th scope="col">Nome do professor</th>
                    <th scope="col">Equipamento</th>
                    <th scope="col">Período de utilização</th> 
                    <th scope="col">Observações</th>
                    <th scope="col">Data do empréstimo</th>
                </tr>
                <tbody>
                    <?php 
                    
                        if ($result = mysqli_query($con, $consulta))
                        {
                            while($user_data = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>"; //cria nova linha
                                echo "<td><input type='checkbox' name='selecionar[]' value='".$user_data['id_emp']."'></td>";
                                echo "<td>".$user_data['nome']."</td>";
                                echo "<td>".$user_data['equipamento']."</td>";
                                echo "<td>".$user_data['periodo']."</td>";
                                echo "<td>".$user_data['observacoes']."</td>";
                                echo "<td>".$user_data['data_emp']."</td>";
                            }
                        }
                    ?>
                </tbody>
            </thead>
        </table> 
        
        <h6>Observações:</h6>
        <input type="text" name="observacoes_dev" size="150">
        <h6>Data de devolução:</h6>
        <input type="date" name="data_dev" id="data_dev">
            <div>
                <button class="btn btn-outline-danger" type="submit" name="Devolver" value="<?php echo $id_emp; ?>">Realizar devolução</button>
            </div>
       
        </form>
    </div>


</body>
