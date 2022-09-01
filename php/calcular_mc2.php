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


    // // CÁLCULO DA REPLICATA/ DUPLICATA/ TRIPLICATA  
    // switch($vezes){
    //     case "Replicata":
    //         //calculando o valor por replicata
    //         $qtd_vezes = ($volume_tratado*1); 
    //         echo "<br> O valor da replicata = " .$qtd_vezes. " ml";
    //         echo "<br>";
    //         break;

    //     case "Duplicata":
    //         //calculando o valor por duplicata
    //         $qtd_vezes = ($volume_tratado*2); 
    //         echo "<br> O valor da duplicata = " .$qtd_vezes. " ml"; 
    //         echo "<br>";
    //         break;
    //     case "Triplicata":
    //         //calculando o valor por triplicata
    //         $qtd_vezes = ($volume_tratado*3); 
    //         echo "<br> O valor da triplicata = " .$qtd_vezes. " ml";
    //         echo "<br>";
    //         break;
        
    // }

    // CÁLCULO DA REPLICATA/ DUPLICATA/ TRIPLICATA  
    echo "<table class='table'>";
            //calculando o valor por vezes do frasco
            $qtd_vezes = ($volume_tratado*$vezes_total); 

    // CALCULAR O ALVO 1 PELO VOLUME CALCULADO ANTES DE ACORDO COM A REP/DUP/TRIP
    switch ($concentracao_alvo){
    case "alvo1":
        // fórmula do UFT TOTAL LEVANDO EM CONSIDERAÇÃO O TIPO DE ISOLADO
        $alvo1_17 = (1.5e7*$qtd_vezes); 
        // printf("<br> Isolado E7, UFC total = %e\n", $alvo1_e7);

        // FÓRMULA DO VOLUME PARA PRODUÇÃO DE ACORDO COM A CONCENTRAÇÃO E O ALVO 
        $volume_producao1 = ($alvo1_17/6.65e8); 
        $volume_producao1_total = ($volume_producao1*1.2);

        $volume_producao1 = number_format($volume_producao1, 3, ',','.');
        $volume_producao1_total = number_format($volume_producao1_total, 2, ',','.');
        $numero_condicao_total_1 = number_format($numero_condicao_total_1, 1, ',','.');

        // fórmula do UFT TOTAL LEVANDO EM CONSIDERAÇÃO O TIPO DE ISOLADO
        $alvo1_0201 = (1.5e7*$qtd_vezes); 
        // printf("<br> Isolado 24, UFC total = = %e\n", $alvo1_24); 

        // FÓRMULA DO VOLUME PARA PRODUÇÃO DE ACORDO COM A CONCENTRAÇÃO E O ALVO 
        $volume_producao2 = ($alvo1_0201/9.72e8); 
        $volume_producao2_total = ($volume_producao2*1.2);

        $volume_producao2 = number_format($volume_producao2, 3, ',','.');
        $volume_producao2_total = number_format($volume_producao2_total, 2, ',','.');
        $numero_condicao_total_2 = number_format($numero_condicao_total_2, 1, ',','.');


        // fórmula do UFT TOTAL LEVANDO EM CONSIDERAÇÃO O TIPO DE ISOLADO
        $alvo1_bg1 = (1.5e7*$qtd_vezes); 
        // printf("<br> Isolado CB13, UFC total = = %e\n", $alvo1_cb13); 

        // FÓRMULA DO VOLUME PARA PRODUÇÃO DE ACORDO COM A CONCENTRAÇÃO E O ALVO 
        $volume_producao3 = ($alvo1_bg1/2.46e8); 

        // printf("<br> Isolado CB13, Volume produção = %e\n", $volume_producao3); 
        $volume_producao3_total = ($volume_producao3*1.2);
        $numero_condicao_total_3 = ($volume_producao3_total*$numero_condicao);

        $volume_producao3 = number_format($volume_producao3, 3, ',','.');
        $volume_producao3_total = number_format($volume_producao3_total, 2, ',','.');
        $numero_condicao_total_3 = number_format($numero_condicao_total_3, 1, ',','.');


        break;
    }

     // Cálculo do VOLUME PARA APLICAR (ML) 
    // switch($volume_producao){
    //     case "e7":
    //         $volume_aplicar = ($uft_total/996000000); 
    //         printf("<br> O valor do VOLUME PARA A PRODUÇÃO é = %e\n", $volume_aplicar); 
    //         break;
        
    //     case "bg1":
    //         $volume_aplicar = ($uft_total/246000000); 
    //         printf("<br> O valor do VOLUME PARA A PRODUÇÃO é = %e\n", $volume_aplicar); 
    //         break;
            
    //     case "24":
    //         $volume_aplicar = ($uft_total/1650000000); 
    //         printf("<br> O valor do VOLUME PARA A PRODUÇÃO é = %e\n", $volume_aplicar); 
    //         break;

    //     case "cb13":
    //         $volume_aplicar = ($uft_total/469000000); 
    //         printf("<br> O valor do VOLUME PARA A PRODUÇÃO é = %e\n", $volume_aplicar); 
    //         break;
        
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
<h1>Calculo de MC2</h1>
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
      <th scope="row">17</th>
      <th><?= $volume_tratado?> ml</th>
      <td><?= $qtd_vezes?> ml</td>
      <td><?= printf("%.1e", $alvo1_17)?> </td>
      <td><?= printf($volume_producao1)?></td>
      <td><?= printf("%.1e", $volume_producao1_total)?></td>
    </tr>
    <tr>
      <th scope="row">_0201</th>
      <th><?= $volume_tratado?> ml</th>
      <td><?= $qtd_vezes?> ml</td>
      <td><?= printf("%.1e", $alvo1_0201)?></td>
      <td><?= printf($volume_producao2)?></td>
      <td><?= printf("%.1e", $volume_producao2_total)?></td>
    </tr>
    <tr>
      <th scope="row">BG1</th>
      <th><?= $volume_tratado?> ml</th>
      <td><?= $qtd_vezes?> ml</td>
      <td><?= printf("%.1e", $alvo1_bg1)?></td>
      <td><?= printf($volume_producao3)?></td>
      <td><?= printf("%.1e", $volume_producao3_total)?></td>
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