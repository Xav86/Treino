<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio05</title>
</head>
<body>
<h1>O programa vai pega o valor da casa, o salário do comprador e em quantos anos ele vai pagar. Calcule o valor  da prestação mensal, sabendo que ela não pode exceder 30% do salário ou então o empréstimo será negado.</h1>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <table>
        <tr>
            <td> Digite o valor da casa</td>
            <td><input type="text" name="valor"></td>

        </tr>

        <tr>
            <td>Digite o salario do comprador</td>
            <td><input type="text" name="salario"></td>

        </tr>

        <tr>
            <td>Digite em quantos anos sera pago</td>
            <td><input type="text" name="anos"></td>

        </tr>

    </table>

    <button type="submit" name="btn">Executar</button>
    <button type="submit" name="clear">Limpar</button>

    </form>
    
<?php
if (isset($_POST["btn"]))
{
    $valor = $_POST["valor"];
    $salario = $_POST["salario"];
    $novosalario = $salario*0.30;
    $anos = $_POST["anos"];

    if (($valor == "") || ($salario == "") || ($anos == ""))
    {
        echo "preencha todos os campos";
    } else {
        $prestacao = $valor/($anos/12);
        if ($prestacao > $novosalario)
        {
            echo "O valor da prestação ($prestacao ao mês) excede 30% do seu salário ($novosalario) sendo então inviavel permitir a operação";

        } else if ($prestacao <= $novosalario)
        {
            echo "sua transição foi autorizada, a prestação sera de $prestacao ao mês.";

        } else 
        {
            echo "Como chegastes aqui?";
            
        }
    }
}
?>
</body>
</html>