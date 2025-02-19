<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC com If</title>
</head>
<body>

<div class="container">
    <h2>Cálculo de IMC</h2>
    <form method="post">
        <label for="peso">Peso (kg): </label>
        <input type="number" id="peso" name="peso" step="0.1" required>

        <label for="altura">Altura (M):</label>
        <input type="number" id="altura" name="altura" step="0.01" required>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Receber os dados do formulário
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        // Verificar se os dados são válidos
        if ($peso > 0 && $altura > 0) {
            // Calcular o IMC
            $imc = $peso / ($altura * $altura);

            // Determinar a classificação do IMC
            if ($imc < 18.5) {
                $classificacao = "Abaixo do peso";
            } elseif ($imc >= 18.5 && $imc < 24.9) {
                $classificacao = "Peso normal";
            } elseif ($imc >= 25 && $imc < 29.9) {
                $classificacao = "Sobrepeso";
            } elseif ($imc >= 30 && $imc < 34.9) {
                $classificacao = "Obesidade grau 1";
            } elseif ($imc >= 35 && $imc < 39.9) {
                $classificacao = "Obesidade grau 2";
            } else {
                $classificacao = "Obesidade grau 3 (mórbida)";
            }

            echo "<div class='result'>";
            echo "<h3>Seu IMC é: " . number_format($imc, 2) . "</h3>";
            echo "<p>Classificação: " . $classificacao . "</p>";
            echo "</div>";
        } 
    }

    ?>
</div>

</body>
</html>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            margin-top: 10%;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2{
            font-family: arial;
            text-align: center;
        } 

        input[type="number"], input[type="submit"] {
            width: 90%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"]{
            margin-left: 10px;
        }

        .result {
            margin-top: 20px;
        }

    </style>
