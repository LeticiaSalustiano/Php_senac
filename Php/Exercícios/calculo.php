<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos Php</title>
</head>
<body>
    <h1>Calculos</h1>
 
    <pre>
<h1>1-Números primos de 1 a 100:</h1>
<?php
function verificarPrimo($numero) {
    if ($numero <= 1) return false;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 1; $i <= 100; $i++) {
    if (verificarPrimo($i)) {
        echo $i . "\n";
    }
}
?>

</pre>

<h1>2-Números pares entre 1000 e 2000:</h1>
<?php
for ($i = 1000; $i <= 2000; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}
?>
<br>

<pre>
<h1>3-Digite números reais:</h1>
<label for="nmr">Digite um Número:</label>
<input type="number" id="nmr" required>
<label for="nmr2">Digite outro Número:</label>
<input type="number" id="nmr2" required>
<button type="submit">Verificar</button>
<br>

<h1>4-Tabuada</h1>
<label for="number">Digite um número para ver sua tabuada: </label>
<input type="number" id= "n" required>
<button type="submit">Verificar</button>


<h1>5-Voto Popular</h1>
<form>
<p>Você é a Favor da Privatização das Praias?:</p>
  <input type="radio" id="s" name="s" value="Sim">
  <label for="s">Sim</label>
  <input type="radio" id="n" name="n" value="Não">
  <label for="n">Não</label>
  <input type="radio" id="p" name="p" value="Outro">
  <label for="p">Prefiro Não Dizer</label>
  <input type="submit" value="Verificar">
</form>


</pre>

</body>
</html>