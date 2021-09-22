<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Página Inicial </title>

</head>
 <body>
         <form action="cadastrar.php" method="POST" style="display: grid;max-width: 640px;">
                <label for="nome"> Nome: </label>
                <input type="text"     name="nome"  placeholder="Nome" value="">

                <br>
                <label for="email"> E-mail: </label>
                <input type="email"     name="email" placeholder="E-mail" value="">

                <br>
                <label for="senha"> Senha: </label>
                <input type="password" name="senha" placeholder="Senha" value="">
                <br>
                
                <button type="submit"> Cadastrar </button>
         </form>
</body>
</html>