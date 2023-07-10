<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio04</title>
</head>
<body>

<?php
    $nome = $_POST["nome"]??null;
    $salario= $_POST["salario"]??null;
    $anos = $_POST["anos"]??null;
    if (isset($_POST["clear"]))
    {
        $nome = "";
        $salario = "";
        $anos = "";

    }

?>
    
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <h1>Programa que você digita nome, Salario e anos de trabalho e faz isso
<pre>
Até 3 anos de empresa: aumento de 3%
entre 3 e 10 anos: aumento de 12.5%
10 anos ou mais: aumento de 20%
</pre>
    </h1>

        <table>
            <tr>
                <td>Digite seu nome</td>
                <td><input type="text" name="nome" value="<?= $nome?>"></td>

            </tr>
            <tr>
                <td>Digite seu Salário</td>
                <td><input type="text" name="salario" value="<?= $salario?>"></td>

            </tr>

            <tr>
                <td>Digite quantos anos trabalha nessa empresa</td>
                <td><input type="text" name="anos" value="<?= $anos?>"></td>

            </tr>

        </table>

        <button type="submit" name="btn">Executar</button>
        <button type="submit" name="clear">Limpar</button>

    </form>

<?php
if(isset($_POST["btn"]))
{
    $nome = $_POST["nome"];
    $salario = $_POST["salario"];
    $anos = $_POST["anos"];

    if (($nome == "") || ($salario == "") || ($anos == ""))
    {
        echo 'Preencha todos os campos';

    } else {
        if ($anos == "3")
        {
            $aumento = $salario+($salario*0.03);
            echo "Você teve um aumento no seu salário! agora seu salario será de $aumento!";
        } else if (($anos > 3) && ($anos <= 10)){
            $aumento = $salario+($salario*0.125);
            echo "Você teve um aumento no seu salário! agora seu salario será de $aumento!";
        } else if ($anos > 10){
            $aumento = $salario+($salario*0.20);
            echo "Você teve um aumento no seu salário! agora seu salario será de $aumento!"; 
        } else{
            echo "Você não trabalha tempo suficiente pra receber um almento :D";
        }

    }
}

?>
    
</body>
</html>