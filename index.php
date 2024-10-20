<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nome = htmlspecialchars($_POST['NOME']);
    $Idade = htmlspecialchars($_POST['Idade']);
    $Email = htmlspecialchars($_POST['Email']);
    $Telefone = htmlspecialchars($_POST['Telefone']);
    $RG = htmlspecialchars($_POST['RG']);
    $CPF = htmlspecialchars($_POST['CPF']);
    $Endereço = htmlspecialchars($_POST['Endereço']);

    echo "<h1>Informações do usuário:</h1>";
    echo "Nome: " . $Nome . "<br>";
    echo "Idade: " . $Idade . "<br>";
    echo "Email: " . $Email . "<br>";
    echo "Telefone: " . $Telefone . "<br>";
    echo "Endereço: " . $Endereço . "<br>";
    echo "CPF: " . $CPF . "<br>";
    echo "RG: " . $RG . "<br>";
} else {
    echo "Nenhum dado foi enviado.";
}
?>
