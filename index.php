<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <main>
        <div class="container">
            <h1 class="title">Minha Calculadora</h1>
            <form method="POST" action="calculadora.php" class="form">
                <p>Digite o primeiro valor:</p><br>
                <input class="input" type="text" name="texto-valor1"><br>
                <p>Digite o segundo valor:</p><br>
                <input class="input" type="text" name="texto-valor2"><br>


                <p>Selecione a operação</p>
                <select name="operacao" class="select"><br>
                    <option class="option">Soma</option>
                    <option class="option">Subtração</option>
                    <option class="option">Multiplicação</option>
                    <option class="option">Divisão</option>
                </select>
                <br>
                <input type="submit" value="Calcular" class="btn">
            </form>
        </div>
    </main>
</body>
</html>