<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <?php

    echo "<h2>Dados Informados!</h2>";
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    echo "Nome: $nome <br>";
    echo "CPF: $cpf <br>";
    echo "Email: $email <br>";
    
    $bvalida=true;
    if  (strlen(trim($nome))===0) {
        echo "<h1 class='titulo'>Nome não Informado!</h1><br>";
        $bvalida=false;

    }
    if (strlen(trim($cpf))=== 0) {
        echo "<h3 class='cpf'>CPF Não Informado!</h3><br>";
        $bvalida=false;
    }

    if (strlen(trim($cpf)) != 11) {
        echo "<h4 class='cpfinvalido'>CPF Invalido!</h4><br>";
        $bvalida=false;
    }
    if(strlen(trim($email))=== 0) {
        echo "<h5 class='emailninformado'>Email não Informado!</h5><br>";
        $bvalida=false;
    }


    if ($bvalida===true){
        echo "<h6 class='cadastroconcluido'>Cadastro com Sucesso!</h6><br>";
    }

    ?>

</body>
</html>