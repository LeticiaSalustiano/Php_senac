<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
    <h1>Equações</h1>

    <h2>a) 18x - 43 = 65</h2>
    <p>Qual o valor de x sendo: 18x - 43 = 65</p>

    <?php
        // 18x = 65 + 43
        // 18x = 108
        // x = 108 / 18
        $x = 108 / 18;
        echo "<p>O valor de x é: " . $x . "</p>";
    ?>
<br>

    <h2>b) 6² * 8 / (5 * 12) + 21</h2>
    <p>Resolva a equação: </p>

    <?php
        $result_b = (pow(6, 2) * 8) / (5 * 12) + 21;
        echo "<p>O valor da equação b é: " . $result_b . "</p>";
    ?>
<br>
    
    <h2>c) √64 * 34 - 12</h2>
    <p>Resolva a equação: </p>

    <?php
        $result_c = sqrt(64) * 34 - 12;
        echo "<p>O valor da equação c é: " . $result_c . "</p>";
    ?>
<br>

    <h2>d) 34 / 16 / 8 + 8³ * (123 - 15 + 8(12² * 3) - 16)</h2>
    <p>Resolva a equação: </p>

    <?php
        $result_d = (34 / 16 / 8) + pow(8, 3) * (123 - 15 + 8 * (pow(12, 2) * 3) - 16);
        echo "<p>O valor da equação d é: " . $result_d . "</p>";
    ?>
<br>

    <h2>e) 2 * 3³ + (√81 / 3 * 12) * 65 + (1253 / (12² + 7))</h2>
    <p>Resolva a equação: </p>
    <?php
        $result_e = (2 * pow(3, 3)) + (sqrt(81) / 3 * 12) * 65 + (1253 / (pow(12, 2) + 7));
        echo "<p>O valor da equação e é: " . $result_e . "</p>";
    ?>

</body>
</html>

<style>

    h1{
    font-family: sans-serif;
    font-size: 40px;   
}

h2{
    font-size: 25px;   
}

p{
    font-size: 20px;   
}

</style>