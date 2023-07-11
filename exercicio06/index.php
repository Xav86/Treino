<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio06</title>
</head>
<body>
    <?php
         $altura = $_POST["altura"]??null;
         $peso = $_POST["peso"]??null;

         $altura = (double)$altura;
         $peso = (double)$peso;

         if (isset($_POST["clear"]))
         {
            $altura = "";
            $peso = "";
         }

    ?>
    
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        
    <h1>Programa pra calcular IMC, peso/altura², e segue a tabela do q tem q mostra . - abaixo de 18.5: Abaixo do peso - entre 18.5 e 25: Peso ideal - entre 25 e 30: Sobrepeso - entre 30 e 40: Obesidade - acima de 40: Obesidade mórbida</h1>
    <table>
        <tr>
            <td>Digite sua altura</td>
            <td><input type="text" name="altura"></td>

        </tr>

        <tr>
            <td>Digite seu peso</td>
            <td><input type="text" name="peso"></td>

        </tr>

    </table>

    <button type="submit" name="btn">Executar</button>
    <button type="submit" name="clear">Limpar</button>

    </form>

<?php
if (isset($_POST["btn"])) //se cololcar numero com , da problema tem q ser .
{

    if (($altura == "") || ($peso == ""))
    {
        echo "Preencha todos os campos";

    } else {
        $imc = $peso/($altura*$altura);
        if ($imc <= 18.5)
        {
            echo "Você esta abaixo do peso ideal, seu imc é $imc";
        } else if (($imc > 18.5) &&($imc <= 25))
        {
            echo "Você esta no peso ideal, seu imc é $imc";
        } else if (($imc > 25) && ($imc <= 30))
        {
            echo "Você esta com sobre-peso, seu imc é $imc";
        } else if (($imc > 30) && ($imc <= 40))
        {
            echo "Você esta obeso, seu imc é $imc";
        } else if ($imc > 40)
        {
            echo "Você esta com obesidade morbida, seu imc é $imc";
        } else 
        {
            echo "Como chegou aqui?";
        }

    }
}

?>
    
</body>
</html>