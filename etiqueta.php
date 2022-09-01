<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/css.css" rel="stylesheet">
    <title>System Microciclo</title>
</head>
<h1>Calcular concentrado - MC1</h1>

<!-- Caixas de paginas -->
<div class="card-header row">
    <div class="col-3 m-3">
        <a href="mc1.php"><button type="button" class="m-3 btn btn-primary">Concentrado MC1</button></a>
    </div>
    <div class="col-3 m-3">
        <a href="mc2.php"><button type="button" class="m-3 btn btn-primary">Concentrado MC2</button></a>
    </div>
    <div class="col-3 m-3">
        <a href="etiqueta.php"><button type="button" class="m-3 btn btn-primary">Etiqueta</button></a>
    </div>
</div>
<?php
    $codigo = $_POST["codigo"];
    $empresa = $_POST["empresa"];
    $data_inicio = $_POST["data_inicio"];
    $data_final = $_POST["data_final"];
    $volume_tratado= $_POST["volume_tratado"];
    $vezes = $_POST["vezes"];
    $concentracao_alvo = $_POST["concentracao_alvo"];
?>
    <!-- Formulário de calculo -->
    <form class="row" action="php/calcular_mc1.php" method="post">
        <div class="card-body p-3 row">
            <div class="mt-3 col-sm-3">
                <label class="form-label">Código</label>
                <?php printf("Código: $codigo <br>"); ?>
            </div>
            <div class="mt-3 col-sm-3">
                <label class="form-label">Empresa</label>
                <?php printf("Empresa: $empresa <br>");?>
            </div>
            <div class="mt-3 col-sm-3">
                <label for="exampleInputPassword1" class="form-label">Data inicial</label>
                <?php printf("Data de inicio: $data_inicio <br>");?>
            </div>
            <div class="mt-3 col-sm-3">
                <label for="form-label" class="form-label">Data final</label>
                <?php printf("Data de final: $data_final");?>
            </div>
            <div class="mt-3 col-sm-3">
                <label class="form-label">Volume tratado (ml)</label>
                <?php print("Volume a ser tratado: $volume_tratado");?>
            </div>
            </div>
            <div class="mt-3 col-sm-4">
                <label class="form-label">Quantidade de vezes</label>
                <?php print("Quantidade de vezes: $vezes");?>
            </div>
        </div>
        </div>
        <div class="card-footer row">
            <div class="col-sm-3">
                <button type="reset" class="m-3 btn btn-primary">Limpar</button>
            </div>
        </div>
    </form>

    <body>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>