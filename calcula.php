<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $tarefas = $_POST['obrigacoes'];
    $atrasos = $_POST['cargahoraria'];

    if($tarefas >= 10 && $tarefas <= 19 && $atrasos <=2 || $atrasos == 3 ){
        $resultado = "Resultado regular";
    }
      elseif($tarefas >= 25 && $atrasos == 0){
        $resultado = "Funcionario elegivel para bonus";
    }
      
    elseif($tarefas >= 20 && $atrasos <= 1){
        $resultado = "Desempenh exelente";
    }
    else{
        $resultado ="Resultado insatisfatorio";
    }
}

?>

<h1>Informações dos escravos clt</h1>

<table border = 1 >
    <tr>
        <th>nome</th>
        <th>idade</th>
        <th>tarefas</th>
        <th>atrasos</th>
        <th>situacao</th>
    </tr>

    <tr>
        <td><?=$nome?></td>
        <td><?=$idade?></td>
        <td><?=$tarefas?></td>
        <td><?=$atrasos?></td>
        <td><?=$resultado?></td>
    </tr>
</table>