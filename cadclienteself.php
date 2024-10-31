<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style3.css">
</head>
<body>
<div class="container p-5">
        <h1>Cadastro de Cliente - usando isset</h1>
        
        <form action="cadclienteself.php" method="post">
            <div class="div1">
                <label for="name" class="nome">Nome</label>
                <input class="nome" id="nome" type="text" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="div2">
                <label for="email" class="email">Email</label>
                <input class="email" id="email" type="email" name="email" placeholder="Digite seu email">
            </div>
            <div class="div3">
                <label for="cpf" class="cpf">CPF</label>
                <input class="cpf" id="cpf" name="cpf" type="cpf" placeholder="Digite seu cpf">
            </div>
            <input class="button" type="submit" value="Cadastrar" name="cadastro"/>
            </div>
        </form>
    </div>
   <?php 
   if (isset($_POST['cadastro'])){
        
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $cpf = trim($_POST['cpf']);
        if (strlen($nome)==0 || strlen($email)==0 ||  strlen($cpf)==0) {          

            echo "<hr><h1 class='display-3'>Todos os dados devem ser informados!</h1>"; 

        }else{
            if (strlen( $cpf)== 11) {
                echo "<hr><h1 class='display-3'>Dados Cadastrados!</h1>"; 
                echo  "<legend  class='w-auto'>Dados do cliente</legend>";
                echo "<fieldset class='border p-2  bg-light'>";
                echo "<h6 class='display-3'>Nome: $nome</h1>";
                echo "<h6 class='display-3'>Email: $email</h1>";
                echo "<h6 class='display-3'>CPF: $cpf</h1>";
                echo "</fieldset'>";
                
                echo "Horário do cadastro: ". date( 'd/m/Y H:i:s', $_SERVER['REQUEST_TIME']);
            }else{
                echo "<h1 class='display-3'>Informe CPF válido!</h1>"; 
                
            }
        }
    }
 ?>
</body>
</html>