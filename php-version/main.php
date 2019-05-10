<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Algoritmo</title>
    <style>
        #errado{
            color:red;
        }
        #certo{
            color:green;
        }
    </style>
</head>
<body>
    <?php
        $senha1 = $_POST["senha1"];
        $senha2 = $_POST["senha2"];

        $certo = "certo";
        $errado = "errado";

        echo "Valor digitado: <br>
        Senha 1: ".$senha1."<br>
        Senha 2: ".$senha2;

        if($senha1===$senha2){
            echo "<h1> id=".$certo.">Senha Aceita!</h1>";
        } else {
            echo "<h1> id=".$errado.">Senha Incorreta! Preencha os Campos Corretamente</h1>";
        }
    ?>
</body>
</html>