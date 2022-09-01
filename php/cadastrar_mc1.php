<?php
        include_once('conexao_banco_sistema.php');

        $codigo = $_POST["codigo"];
        $empresa = $_POST["empresa"];
        $data_inicio = $_POST["data_inicio"];
        $data_final = $_POST["data_final"];
        $triplicata = $_POST["triplicata"];
        $replicata = $_POST["replicata"];
        $subisolados = $_POST["subisolados"];
        

        $result = mysqli_query($conexao, "INSERT INTO produto (codigo, empresa, data_inicio, data_final, triplicata, replicata, subisolados) 
        VALUES ('$codigo', '$empresa', '$data_inicio', '$data_final', '$triplicata', '$replicata', '$subisolados')");
        
        
        

//         if ($result) {
//             // Recupera o ID do último produto cadastrado
            

//             // Recuperar todos as categorias selecionadas
//             echo "1";
//             foreach ($Categoria as $cat){
//                 echo "2";
//                 echo $cat;
//                 $sql = "INSERT INTO Categoria (idproduto, idcategoria) VALUES ($produto, $cat)";
//                 $result2 = mysqli_query($conn, $sql);

//                 if (!$result2) {
//                     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//                     desconectar($conn);
//                     echo "Erro1";
//                     //header('Location: produto_adicionar.php');
//                 }
//             }
//             desconectar($conn);
//             header('Location: produtos.php');
//         } else {
//             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//             desconectar($conn);
//             echo "Erro2";
//             //header('Location: produto_adicionar.php');
//         }
// }else{
//     header('Location: login.php');
// }
    ?>