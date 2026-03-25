É um prazer te conhecer <?php echo ($_POST['nome']).'  '.($_POST['sobrenome']); ?>
<br>
<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];

$media = ($n1 + $n2 + $n3) / 3;

echo "Sua média é: " . $media;
?>