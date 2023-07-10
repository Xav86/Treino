<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio03</title>
</head>
<body>
    
    <?php
    $largura = $_POST['largura']??null;
    $comprimento = $_POST['comprimento']??null;
    if (isset($_POST["clear"]))
    {
        $largura = "";
        $comprimento = "";
    }
    
    ?>

    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <h1>Programa que le o comprimeto e largura de um terreno e calcula a área dele em metros quadrados, alem de dar uma classificação, sendo ela:</h1>

    <h1>
    <pre>
Abaixo de 100m² = TERRENO POPULAR 
Entre 100m² e 500m² = TERRENO MASTER
Acima de 500m² = TERRENO VIP
    </pre>   
    </h1>

        <table>
            <tr>
                <td>Digite o comprimento do seu terreno</td>
                <td><input type="text" name="comprimento" value="<?= $comprimento?>"></td>
            </tr>
            <tr>
                <td>Digite a Largura desse terreno</td>
                <td><input type="text" name="largura" value="<?= $largura?>"></td>
            </tr>

        </table>

        <button type="submit" name="btn">Calcular</button>
        <button type="submit" name="clear">Limpar</button>

    </form>

<?php

if (isset($_POST["btn"]))
{
    $largura = $_POST["largura"];
    $comprimento = $_POST["comprimento"];   

    if (($largura == "") || ($comprimento == ""))
    {
        echo "Preencha todos os campos por favor.";
    } else{
        $area = $largura * $comprimento;
    
        if ($area < 100)
        {
            echo "Seu terreno tem $area m², entrando na classificação de terreno popular";
        } else if (($area >= 100) && ($area <= 500))
        {
            echo "Seu terreno tem $area m², entrando na classificação de terreno master";
        }
        else if ($area > 500)
        {
            echo "Seu terreno tem $area m², entrando na classificação de terreno VIP";
        } else
        {
            echo "talvez isso não seja um terreno...";
        }

    }
}  

?>
</body>
</html>