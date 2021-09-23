<?php  
include_once __DIR__ . '/application/route/route.php';
$route = new Route();
$uri = $route->viewGet($_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Página inicial </title>
</head>
 <body>
         <div class="app"> <?= $uri ?>  </div>
</body>
</html>