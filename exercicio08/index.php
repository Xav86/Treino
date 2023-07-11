<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio08</title>
</head>
<body>
<?php
    $horas = $_POST["horas"]??null;
    $mes = $_POST["mes"]??null;
    if (isset($_POST["clear"]))
    {
        $hora = "";
        $mes = "";

    }

?>

    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <h1>Programa vai lar quantas horas de atividade física vc fez e ent segue coisa  - Cada hora de atividade física no mês vale pontos - até 10h de atividade no mês: ganha 2 pontos por hora - de 10h até 20h de atividade no mês: ganha 5 pontos por hora - acima de 20h de atividade no mês: ganha 10 pontos por hora - A cada ponto ganho, o cliente fatura R$0,05 (5 centavos)</h1>

    <table>
        <tr>
            <td>Digite quantas horas você se exercitou</td>
            <td><input type="text" name="horas"></td>

        </tr>

        <tr>
            <td>Digite por quantos meses</td>
            <td><input type="text" name="mes"></td>

        </tr>

    </table>

    <button type="submit" name="btn">Executar</button>
    <button type="submit" name="clear">Limpar</button>

    </form>

<?php
if (isset($_POST["btn"]))
{
    if (($horas == "") || ($mes == ""))
    {
        echo "preencha todos os campos";
    } else {
        if ($horas <= 10)
        {
            $total = $horas*2;
            $total = $total*$mes;
            $dinheiro = $total*0.05;
            echo "Seus pontos renderam tum total de R$ $dinheiro";
        } else if (($horas > 10) || ($horas <= 20))
        {
            $total = $horas*5;
            $total = $total*$mes;
            $dinheiro = $total*0.05;
            echo "Seus pontos renderam tum total de R$ $dinheiro";
        } else if ($horas > 20)
        {
            $total = $horas*10;
            $total = $total*$mes;
            $dinheiro = $total*0.05;
            echo "Seus pontos renderam tum total de R$ $dinheiro";
        } else{
            echo "Como chegamos aqui?";
        }
        
    }
}
?>
    
</body>
</html>