<?php
    // include_once('conexao_bd_sistema.php');

    $codigo = $_POST["codigo"];
    $empresa = $_POST["empresa"];
    $data_inicio = $_POST["data_inicio"];
    $data_final = $_POST["data_final"];
    $condicao = $_POST["condicao"];

    printf("Código: $codigo <br>"); 
    printf("Empresa: $empresa <br>"); 
    printf("Data de inicio: $data_inicio <br>"); 
    printf("Data de final: $data_final <br>"); 
    printf("Condição: $condicao <br>"); 

      
    $volume_tratado= $_POST["volume_tratado"];
    $vezes_total = $_POST["vezes_total"];
    $numero_condicao = $_POST["numero_condicao"];
    $concentracao_alvo = $_POST["concentracao_alvo"];
    $numero_condicao = $_POST["numero_condicao"];
    

    
    $query = "INSERT INTO mc1_a1 (codigo, empresa, data_inicio, data_final, volume_tratado, alvo1_e7, volume_producao1, volume_proucao1_total,
    alvo1_24, volume_producao2, volume_proucao2_total, alvo1_bg13, volume_producao3, volume_proucao3_total, qtd_vezes) VALUES ('$codigo', '$empresa', '$data_inicio', '$data_final', '$volume_tratado', '$alvo1_e7', '$volume_producao1', '$volume_proucao1_total',
    '$alvo1_24', '$volume_producao2', '$volume_proucao2_total', '$alvo1_bg13', '$volume_producao3', '$volume_proucao3_total', '$qtd_vezes')";
        
    // CÁLCULO DA REPLICATA/ DUPLICATA/ TRIPLICATA  
    echo "<table class='table'>";
            //calculando o valor por vezes do frasco
            $qtd_vezes = ($volume_tratado*$vezes_total); 

    // CALCULAR O ALVO 1 PELO VOLUME CALCULADO ANTES DE ACORDO COM A REP/DUP/TRIP
    switch ($concentracao_alvo){
    case "alvo1":
        // fórmula do UFT TOTAL LEVANDO EM CONSIDERAÇÃO O TIPO DE ISOLADO
        $alvo1_e7 = (1.3e7*$qtd_vezes); 

        // Alvo unitário 

        // FÓRMULA DO VOLUME PARA PRODUÇÃO DE ACORDO COM A CONCENTRAÇÃO E O ALVO 
        $volume_producao1 = ($alvo1_e7/9.96e8); 

        // printf("<br> Isolado E7, Volume produção = %e\n", $volume_producao1); 
        $volume_producao1_total = ($volume_producao1*1.2);
        $numero_condicao_total_1 = ($volume_producao1_total*$numero_condicao);

        $volume_producao1 = number_format($volume_producao1, 3, ',','.');
        $volume_producao1_total = number_format($volume_producao1_total, 1, ',','.');
        $numero_condicao_total_1 = number_format($numero_condicao_total_1, 1, ',','.');


        // fórmula do UFT TOTAL LEVANDO EM CONSIDERAÇÃO O TIPO DE ISOLADO
        $alvo1_24 = (3.05e6*$qtd_vezes); 
        // printf("<br> Isolado 24, UFC total = = %e\n", $alvo1_24);

        // FÓRMULA DO VOLUME PARA PRODUÇÃO DE ACORDO COM A CONCENTRAÇÃO E O ALVO 
        $volume_producao2 = ($alvo1_24/1.65e9); 
        // printf("<br> Isolado 24, Volume produção = %e\n", $volume_producao2); 
        $volume_producao2_total = ($volume_producao2*1.2);
        $numero_condicao_total_2 = ($volume_producao2_total*$numero_condicao);

        $volume_producao2 = number_format($volume_producao2, 3, ',','.');
        $volume_producao2_total = number_format($volume_producao2_total, 1, ',','.');
        $numero_condicao_total_2 = number_format($numero_condicao_total_2, 1, ',','.');


        // fórmula do UFT TOTAL LEVANDO EM CONSIDERAÇÃO O TIPO DE ISOLADO
        $alvo1_cb13 = (1.78e7*$qtd_vezes); 
        // printf("<br> Isolado CB13, UFC total = = %e\n", $alvo1_cb13); 

        // FÓRMULA DO VOLUME PARA PRODUÇÃO DE ACORDO COM A CONCENTRAÇÃO E O ALVO 
        $volume_producao3 = ($alvo1_cb13/4.69e8); 

        // printf("<br> Isolado CB13, Volume produção = %e\n", $volume_producao3); 
        $volume_producao3_total = ($volume_producao3*1.2);
        $numero_condicao_total_3 = ($volume_producao3_total*$numero_condicao);

        // Identação dos números 
        $volume_producao3 = number_format($volume_producao3, 3, ',','.');
        $volume_producao3_total = number_format($volume_producao3_total, 1, ',','.');
        $numero_condicao_total_3 = number_format($numero_condicao_total_3, 1, ',','.');


        // fórmula do UFT TOTAL LEVANDO EM CONSIDERAÇÃO O TIPO DE ISOLADO
        $alvo1_bg1 = (1.27e5*$qtd_vezes); 
        // printf("<br> Isolado BG1, UFC total = = %e\n", $alvo1_bg1); 
        
        // FÓRMULA DO VOLUME PARA PRODUÇÃO DE ACORDO COM A CONCENTRAÇÃO E O ALVO 
        $volume_producao4 = ($alvo1_bg1/2.46e8); 
        // printf("<br> Isolado BG1, Volume produção = %e\n", $volume_producao4); 
        $volume_producao4_total = ($volume_producao4*1.2);

        $numero_condicao_total_4 = ($volume_producao4_total*$numero_condicao);


        // Identação dos números 
        $volume_producao4 = number_format($volume_producao4, 3, ',','.');
        $volume_producao4_total = number_format($volume_producao4_total, 1, ',','.');
        $numero_condicao_total_4 = number_format($numero_condicao_total_4, 1, ',','.');
        

        break;

    case "alvo2":
        // fórmula do UFT TOTAL LEVANDO EM CONSIDERAÇÃO O TIPO DE ISOLADO E7
        $alvo2_e7 = (1.5e7*$qtd_vezes); 
        // printf("<br> Isolado E7, UFC total = %e\n", $alvo2_e7); 
        
        // FÓRMULA DO VOLUME PARA PRODUÇÃO DE ACORDO COM A CONCENTRAÇÃO E O ALVO 
        $volume_producao1_2 = ($alvo2_e7/996000000); 

        // printf("<br> Isolado E7, Volume produção = %e\n", $volume_producao1); 
        $volume_producao1_total_2 = ($volume_producao1_2*1.2);
        $numero_condicao_total_1 = ($volume_producao1_total_2*$numero_condicao);

        $volume_producao1_2 = number_format($volume_producao1_2, 3, ',','.');
        $volume_producao1_total_2 = number_format($volume_producao1_total_2, 2, ',','.');
        $numero_condicao_total_1 = number_format($numero_condicao_total_1, 1, ',','.');
        
        $alvo2_24 = (1.5e7*$qtd_vezes); 
        // printf("<br> Isolado 24, UFC total = %e\n", $alvo2_24); 
        
        // FÓRMULA DO VOLUME PARA PRODUÇÃO DE ACORDO COM A CONCENTRAÇÃO E O ALVO 
        $volume_producao2_2 = ($alvo2_24/1650000000); 
        $volume_producao2_total_2 = ($volume_producao2_2*1.2);
        $numero_condicao_total_2 = ($volume_producao2_total_2*$numero_condicao);

        $volume_producao2_2 = number_format($volume_producao2_2, 3, ',','.');
        $volume_producao2_total_2 = number_format($volume_producao2_total_2, 2, ',','.');
        $numero_condicao_total_2 = number_format($numero_condicao_total_2, 1, ',','.');

        
        $alvo2_cb13 = (1.5e7*$qtd_vezes); 
        // printf("<br> Isolado CB13, UFC total = %e\n", $alvo2_cb13);
        
        // FÓRMULA DO VOLUME PARA PRODUÇÃO DE ACORDO COM A CONCENTRAÇÃO E O ALVO 
        $volume_producao3_2 = ($alvo2_cb13/469000000);
        $volume_producao3_total_2 = ($volume_producao3_2*1.2);
        $numero_condicao_total_3 = ($volume_producao3_total_2*$numero_condicao);

        $volume_producao3_2 = number_format($volume_producao3_2, 3, ',','.');
        $volume_producao3_total_2 = number_format($volume_producao3_total_2, 2, ',','.');
        $numero_condicao_total_3 = number_format($numero_condicao_total_3, 1, ',','.');

       
        $alvo2_bg1 = (1.5e7*$qtd_vezes); 
        // printf("<br> Isolado BG1, UFC total = %e\n", $alvo2_bg1); 
        
        // FÓRMULA DO VOLUME PARA PRODUÇÃO DE ACORDO COM A CONCENTRAÇÃO E O ALVO 
        $volume_producao4_2 = ($alvo2_bg1/246000000); 
        $volume_producao4_total_2 = ($volume_producao4_2*1.2);
        $numero_condicao_total_4 = ($volume_producao4_total_2*$numero_condicao);

        $volume_producao4_2 = number_format($volume_producao4_2, 3, ',','.');
        $volume_producao4_total_2 = number_format($volume_producao4_total_2, 2, ',','.');
        $numero_condicao_total_4 = number_format($numero_condicao_total_4, 1, ',','.');

        break;
    }

    // switch ($concentracao_alvo) {
    //   case 'alvo1':
    //     echo "$alvo1_e7, $alvo1_24, $alvo1_bg1, $alvo1_bg1";
    //     break;
      
    //   case "alvo2":
    //     echo "$alvo2_e7, $alvo2_24, $alvo2_bg1, $alvo2_bg1";
    //     break;
    // }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/css.css" rel="stylesheet">
    <title>System Microciclo</title>
</head>
<br>
<h1>Calculo de MC1</h1>
<div class="row">
<div class="col-sm-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Concentrado MC1</th>
      <th scope="col">Volume unitário de resíduo</th>
      <th scope="col">Volume total de resíduo</th>
      <th scope="col">UFC total</th>
      <th scope="col">Volume para aplicar (ml)</th>
      <th scope="col">Volume total para tratamento</th>
      <th scope="col">Volume total vezes a condição</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">E7</th>
      <th><?= $volume_tratado?></th>
      <td><?= $qtd_vezes?></td>
    <td>
      <?php 
        
        switch ($concentracao_alvo) {
          case 'alvo1':
          printf("%.2e", $alvo1_e7);
        break;
      
          case "alvo2":
            printf("%.2e", $alvo2_e7);
          break;
    }

    ?> 
    </td>
      <td>
    <?php 
        
        switch ($concentracao_alvo) {
          case 'alvo1':
          printf($volume_producao1);
        break;
      
          case "alvo2":
            printf($volume_producao1_2);
          break;
    }

    ?></td>
      <td><?php 
        
        switch ($concentracao_alvo) {
          case 'alvo1':
          printf($volume_producao1_total);
        break;
      
          case "alvo2":
            printf($volume_producao1_total_2);
          break;
    }

    ?></td>

          <td><?php 
        
        switch ($concentracao_alvo) {
          case 'alvo1':
          printf($numero_condicao_total_1);
        break;
      
          case "alvo2":
            printf($numero_condicao_total_1);
          break;
    }
    
    ?></td>

    </tr>
    
    <!-- OUTRA COLUNA -->
    <tr>
      <th scope="row">24</th>
      <th><?= $volume_tratado?></th>
      <td><?= $qtd_vezes?></td>
      <td><?php 
        
        switch ($concentracao_alvo) {
          case 'alvo1':
          printf("%.2e", $alvo1_24);
        break;
      
          case "alvo2":
            printf("%.2e", $alvo2_24);
          break;
    }

    ?></td>
      <td><?php 
        
        switch ($concentracao_alvo) {
          case 'alvo1':
          printf($volume_producao2);
        break;
      
          case "alvo2":
            printf($volume_producao2_2);
          break;
    }

    ?></td>
      <td><?php 
        
        switch ($concentracao_alvo) {
          case 'alvo1':
          printf($volume_producao2_total);
        break;
      
          case "alvo2":
            printf($volume_producao2_total_2);
          break;
    }

    ?></td>

          <td><?php 
        
        switch ($concentracao_alvo) {
          case 'alvo1':
          printf($numero_condicao_total_2);
        break;
      
          case "alvo2":
            printf($numero_condicao_total_2);
          break;
    }
    
    ?></td>

    </tr>

    <!-- OUTRA COLUNA -->
    <tr>
      <th scope="row">CB13</th>
      <th><?= $volume_tratado?></th>
      <td><?= $qtd_vezes?></td>
      <td><?php 
        
        switch ($concentracao_alvo) {
          case 'alvo1':
          printf("%.2e", $alvo1_cb13);
        break;
      
          case "alvo2":
            printf("%.2e", $alvo2_cb13);
          break;
    }

    ?></td>
      <td><?php 
        
        switch ($concentracao_alvo) {
          case 'alvo1':
          printf($volume_producao3);
        break;
      
          case "alvo2":
            printf($volume_producao3_2);
          break;
    }

    ?></td>

      <td><?php 
        
        switch ($concentracao_alvo) {
          case 'alvo1':
          printf($volume_producao3_total);
        break;
      
          case "alvo2":
            printf($volume_producao3_total_2);
          break;
    }

    ?></td>
              <td><?= $numero_condicao_total_3?></td>


    </tr>
    <!-- OUTRA COLUNA -->
    <tr>
      <th scope="row">BG1</th>
      <th><?= $volume_tratado?></th>
      <td><?= $qtd_vezes?></td>

      <td><?php 
        
        switch ($concentracao_alvo) {
          case 'alvo1':
          printf("%.2e", $alvo1_bg1);
        break;
      
          case "alvo2":
            printf("%.2e", $alvo2_bg1);
          break;
    }

    ?></td>

      <td><?php 
        
        switch ($concentracao_alvo) {
          case 'alvo1':
          printf($volume_producao4);
        break;
      
          case "alvo2":
            printf($volume_producao4_2);
          break;
    }

    ?></td>
      <td><?php 
        
        switch ($concentracao_alvo) {
          case 'alvo1':
          printf($volume_producao4_total);
        break;
      
          case "alvo2":
            printf($volume_producao3_total_2);
          break;
    }

    ?></td>
                <td><?= $numero_condicao_total_4?></td>

    </tr>
  </tbody>
</table>
</div>
</div>

<body>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>