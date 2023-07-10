<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>
<body>
<?php
    $n2 = $_POST ['n2']??null;
    $n1 = $_POST ['n1']??null;
    if (isset($_POST["clear"]))
    {
        $n1 = "";
        $n2 = "";
    }      
?>

    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <h1>Ao digitar 2 numeros vai falar se é maior, menor ou igual</h1>
        <table>
                <tr>
                    <td>Digite um numero</td>
                    <td><input type="text" name="n1" value="<?= $n1?>"></td>
                        
                </tr>
                <tr>
                    <td>Digite outro numero</td>
                    <td><input type="text" name="n2" value="<?= $n2?>"></td>
                </tr>
               
        </table>
        <button type="submit" name="btn">Verificar</button>
        <button type="submit" name="clear">Limpar</button>
    </form>

<?php
if (isset($_POST["btn"]))
{
    if (($n1 == null) || ($n2 == null))
    {
        echo "Escreve um numero ai meu mano";
    }
    else if ($n1 == $n2)
    {
        echo "O valor $n1 e $n2 são iguais";
    } else if ($n1 > $n2)
    {
        echo "O $n1 é maior que o $n2";
    } else
    {
        echo "O $n2 é maior que o $n1";
    }
}
?>

</body>
</html>