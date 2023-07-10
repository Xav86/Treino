<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02</title>
</head>
<body>
<?php
    $nome = $_POST ['nome']??null;
    $valor = $_POST ['valor']??null;
    $sexo = $_POST['sexo']??null;
    if (isset($_POST["clear"]))
    {
        $nome = "";
        $valor = "";
        $sexo = "";
    }      
?>
    <h1>Programa que le o nome, sexo e valor das compras e da 5% de desconto pra homen e 13% pra mulher</h1>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <table>
        <tr>
            <td>Digite seu nome</td>
            <td><input type="text" name="nome" value="<?= $nome?>"></td>
        </tr>

        <tr>
            <td>Digite seu sexo (M/F)</td>
            <td><input type="text" name="sexo" value="<?= $sexo?>"></td>
        </tr>

        <tr>
            <td>Digite o valor das compras</td>
            <td><input type="text" name="valor" value="<?= $valor?>"></td>
        </tr>
        
    </table>
    <button type="submit" name="btn">Executar</button>
    <button type="submit" name="clear">Limpar</button>

    </form>

<?php
if (isset($_POST["btn"]))
{
    $sexo = $_POST["sexo"];
    $valor = $_POST["valor"];
    $nome = $_POST["nome"];

    if (($sexo == "") || ($valor == "") || ($nome == ""))
    {
        echo "Preencha todos os campos por favor.";
    } else{

        if (($sexo == "m") || ($sexo == "M"))
        {
            $total = $valor-(($valor * 0.05));
            echo "O total das compras do $nome sera de $total com desconto aplicado";

        } else  if (($sexo == "f") || ($sexo == "F")){
            $total = $valor-(($valor*0.13));
            echo "O total a pagar da $nome sera de $total com desconto já aplicado";

        } else
        {
            echo "isto não é uma opção aqui";
        }
    }   
          
}

?> 
</body>
</html>