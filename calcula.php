<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $tarefas = $_POST['tarefas'];
    $atrasos = $_POST['atrasos'];
    $setor = $_POST['setor'];

    if($tarefas >= 10 && $tarefas <= 19 && $atrasos <=2 || $atrasos == 3 ){
        $resultado = "Resultado regular";
    }
      elseif($tarefas >= 25 && $atrasos == 0){
        $resultado = "Funcionario elegivel para bonus";
    }
      
    elseif($tarefas >= 20 && $atrasos <= 1){
        $resultado = "Desempenho exelente";
    }
    else{
        $resultado ="Resultado insatisfatorio";
    }
}

?>

<h1>Informações dos escravos clt</h1>
<h3><?php echo "data avaliacao". date('d/m/Y');?></h3>
<table border = 1 >
    <tr>
        <th>nome</th>
        <th>idade</th>
        <th>tarefas</th>
        <th>atrasos</th>
        <th>setor</th>
        <th>situacao</th>
    </tr>

    <tr>
        <td><?=$nome?></td>
        <td><?=$idade?></td>
        <td><?=$tarefas?></td>
        <td><?=$atrasos?></td>
        <td><?=$setor?></td>
        <td><?=$resultado?></td>
    </tr>
</table>