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
<h1>Calcular concentrado - MC2</h1>

<!-- Caixas de paginas -->
<div class="card-header row">
    <div class="col-sm-3 m-3">
        <a href="mc1.php"><button type="button" class="m-3 btn btn-primary">Concentrado MC1</button></a>
    </div>
    <div class="col-sm-3 m-3">
        <a href="mc2.php"><button type="button" class="m-3 btn btn-primary">Concentrado MC2</button></a>
    </div>
    <!-- <div class="col-3 m-3">
        <a href="etiqueta.php"><button type="button" class="m-3 btn btn-primary">Etiqueta</button></a>
    </div> -->
</div>

<!-- Formulário de calculo -->
<form class="row" action="php/calcular_mc2.php" method="post">
    <div class="card-body p-3 row">
        <div class="mt-3 col-sm-3">
            <label class="form-label">Código</label>
            <input name="codigo" type="text" class="form-control" id="codigo">
        </div>
        <div class="mt-3 col-sm-3">
            <label class="form-label">Empresa</label>
            <input name="empresa" type="text" class="form-control" id="empresa">
        </div>
        <div class="mt-3 col-sm-3">
            <label for="exampleInputPassword1" class="form-label">Data inicial</label>
            <input name="data_inicio" type="date" class="form-control" id="data_inicial">
        </div>
        <div class="mt-3 col-sm-3">
            <label for="form-label" class="form-label">Data final</label>
            <input name="data_final" type="date" class="form-control" id="data_final">
        </div>
        <div class="mt-3 col-sm-3">
            <label class="form-label">Volume tratado (ml)</label>
            <input name="volume_tratado" type="number" class="form-control" id="voluem_repli">
        </div>
        <div class="mt-3 col-sm-4">
            <label class="form-label">Concentração alvo</label>
            <select name="concentracao_alvo" class="form-select form-select col-sm-3" aria-label=".form-select example">
            <option selected value="alvo1">Alvo 1</option>
          </select>
        </div>
        <div class="mt-3 col-sm-4">
            <label class="form-label">Quantidade de vezes</label>
            <input name="vezes_total" type="number" class="form-control" id="voluem_repli">
          </select>
        </div>
        <div class="mt-3 col-sm-4">
            <label class="form-label">Número Condição</label>
            <input name="numero_condicao" type="number" class="form-control">
        </div>
        
        <div class="mt-3 col-sm-4">
            <label class="form-label">Classificação</label>
            <input name="condicao" type="text" class="form-control">
        </div>
    </div>
    <div class="card-footer row">
        <div class="col-sm-3">
            <button type="submit" class="m-3 btn btn-primary">Calcular</button>
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