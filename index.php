<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desempenho dos colaboradores</title>
</head>
<body>
    <h1>Formulario de desempenho fffff</h1>

    <section>
        <form action="calcula.php" method = "POST">
            <label for="text">Nome:</label>
            <input type="text" name  ="nome" placeholder="Digite seu nome"><br>

            <label for="number">Idade:</label>
            <input type="number" name  ="idade" placeholder="Qual a sua idade"><br>

            <label for="number">Resultados entregues</label>
            <input type="number" name  ="obrigacoes" min="0" max="50" ><br>

            <label for="number">Carga horaria:</label>
            <input type="number" name  ="cargahoraria" min="0" max="50" ><br>

            <div>
                <button type="submit">Enviar</button>
            <div>

        </form>
    </section>
</body>
</html>