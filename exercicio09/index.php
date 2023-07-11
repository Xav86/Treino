<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio09</title>
</head>
<body>
<?php
    $n1 = $_POST ['n1']??null;
    $n2 = $_POST ['n2']??null; 
    if (isset($_POST["clear"]))
    {
        $n1 = "";
        $n2 = "";
    }      
?>

    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <h1>Ao digitar 2 numeros vai conta de um até o outro</h1>
        <table>
                <tr>
                    <td>Digite um numero pra comecar a conta</td>
                    <td><input type="text" name="n1" value="<?= $n1?>"></td>
                        
                </tr>
                <tr>
                    <td>Digite outro numero pra termina a conta</td>
                    <td><input type="text" name="n2" value="<?= $n2?>"></td>
                </tr>
               
        </table>

        <button type="submit" name="btn">Executar</button>
        <button type="submit" name="clear">Limpar</button>

    </form>

<?php
if (isset($_POST["btn"]))
{
    if (($n1 == "") || ($n2 == ""))
    {
        echo "preencha todos os campos";
    } else {
       if ($n1 == $n2)
        {
           echo "os valores são iguais, não da pra conta assim patrão";
        } else if ($n1 > $n2)
        {
            for ($i = $n1; $i <= $n2; $i++)
            {
                echo $i;
            }
        } else if ($n1 < $n2)
        {
           for ($i = $n2; $i <= $n1; $i++)
            {
               echo $i;
            }
        }
    }      

}
?>

</body>
</html>