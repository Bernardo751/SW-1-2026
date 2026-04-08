<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cálculo</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST['nome'];
            $salarioBruto = floatval($_POST['salario']);
            $faltas = intval($_POST['faltas']);

            $tetoINSS = 8475.55;
            $baseCalculoINSS = ($salarioBruto > $tetoINSS) ? $tetoINSS : $salarioBruto;
            $inss = 0;

            if ($baseCalculoINSS <= 1621.00) {
                $inss = $baseCalculoINSS * 0.075;
            } elseif ($baseCalculoINSS <= 2902.84) {
                $inss = ($baseCalculoINSS * 0.09);
            } elseif ($baseCalculoINSS <= 4354.27) {
                $inss = ($baseCalculoINSS * 0.12);
            } else {
                $inss = ($baseCalculoINSS * 0.14);
            }

            $valorFaltas = ($salarioBruto / 30) * $faltas;
            $vt = $salarioBruto * 0.06;
            $salarioLiquido = $salarioBruto - $inss - $valorFaltas - $vt;

            echo "<div class='resultado'>";
            echo "<h3>Resultado</h3>";
            echo "<p><strong>$nome</strong>, o Total do seu salário após os descontos é:</p>";
            echo "<h2>R$ " . number_format($salarioLiquido, 2, ',', '.') . "</h2>";
            echo "<hr>";
            echo "<p><small>Desconto INSS: R$ " . number_format($inss, 2, ',', '.') . "</small></p>";
            echo "<p><small>Desconto VT: R$ " . number_format($vt, 2, ',', '.') . "</small></p>";
            echo "<p><small>Desconto Faltas: R$ " . number_format($valorFaltas, 2, ',', '.') . "</small></p>";
            echo "</div>";
        }
        ?>
        <br>
        <a href="index.html" style="text-decoration: none; color: #007bff;">Voltar</a>
    </div>
</body>
</html>