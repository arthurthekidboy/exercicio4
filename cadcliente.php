<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Cadastro de Cliente</h2>
    <form action="dadosform.php" method="post">
        <div class="div">
        <label for="name">Nome:</label><br>
        <input type="text" class="text" id="name" name="nome"><br>
        <label for="email">Email:</label><br>
        <input type="text"  class="text" id="email" name="email"><br>
        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" class="text" name="cpf"><br>
        <input type="submit" class="button" value="Enviar">
</div>
</form>    
</body>
</html>