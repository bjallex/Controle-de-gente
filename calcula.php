<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $obrigacoes = $_POST['obrigacoes'];
    $cargahoraria = $_POST['cargahoraria'];

    if($obrigacoes >= 10 && $obrigacoes <= 19 && $cargahoraria <=2 || $cargahoraria == 3 ){
        $resultado = "Reultado exelente";
    }
    elseif($obrigacoes >= 20 && $cargahoraria <= 1){
    }
    else{
        $resultado ="Resultado insatisfatorio";
    }
}

?>

<h1>Informações do colaboradores</h1>

<table border = 1 >
    <tr>
        <th>username</th>
        <th>idade</th>
        <th>obrigacoes</th>
        <th>cargahoraria</th>
        <th>situacao</th>
    </tr>

    <tr>
        <td><?=$nome?></td>
        <td><?=$idade?></td>
        <td><?=$obrigacoes?></td>
        <td><?=$cargahoraria?></td>
        <td><?=$resultado?></td>
    </tr>
</table>