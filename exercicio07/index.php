<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio07</title>
</head>
<body>
<?php
    $carro = $_POST["carro"]??null;
    $dias = $_POST["dias"]??null;
    $km = $_POST["km"]??null;
    if (isset($_POST["clear"]))
    {
        $carro = "";
        $dias = "";
        $km = "";

    }

?>
    
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <h1>prgrama le tipo de carro, quanto dias foi alugado e o tipo, luxo 150por dia ou popular 90por dia e os quilometro. ent segue tabela Carros populares (aluguel de R$90 por dia) - Até 100Km percorridos: R$0,20 por Km - Acima de 100Km percorridos: R$0,10 por Km - Carros de luxo (aluguel de R$150 por dia) - Até 200 Km percorridos: R$0,30 por Km - Acima de 200Km percorridos: R$0,25 por Km.</h1>
    <table>
        <tr>
            <td>Digite tipo de carro (Popular/Luxo)</td>
            <td><input type="text" name="carro"></td>

        </tr>

        <tr>
            <td>Digite dias de uso</td>
            <td><input type="text" name="dias"></td>

        </tr>

        <tr>
            <td>Digite os quilometros percorridos</td>
            <td><input type="text" name="km"></td>

        </tr>

    </table>

    <button type="submit" name="btn">Executar</button>
    <button type="submit" name="clear">Limpar</button>

    </form>
<?php
if (isset($_POST["btn"]))
{
    if (($carro == "") || ($dias == "") || ($km == ""))
    {
        echo "preencha todos os campos";
    } else {
        if (($carro == "Popular") || ($carro == "popular"))
        {
            $aluguel = 90*$dias;
                //aqui n vai funfa pq n manjo d double... AINDA...
            if ($km <= 100) 
            {
                $total = $aluguel+0.20;
                echo "Total do aluguel do carro ficou $total";
            } else if ($km > 100)
            {
                $extra = $km/100;
                $extra = $extra*0.10;
                $total = $aluguel+0.20+$extra;
                echo "Total do aluguel do carro ficou $total";
                
            }

        } else if (($carro == "Luxo") || ($carro == "luxo")) {
            $aluguel = 150*$dias;
                //aqui n vai funfa pq n manjo d double... AINDA...
            if ($km <= 200) 
            {
                $total = $aluguel+0.30;
                echo "Total do aluguel do carro ficou $total";
            } else if ($km > 100)
            {
                $extra = $km/100;
                $extra = $extra*0.25;
                $total = $aluguel+0.30+$extra;
                echo "Total do aluguel do carro ficou $total";
                
            }

        } else{
            echo "favor digita direito, já q esse programa n é bem feito e da problema se digitarem errado";
        }
    
    }    
}

?>
    
</body>
</html>