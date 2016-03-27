<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Estas adentro
<?php

if(isset($_SESSION["usuario"])){

    echo $_SESSION["usuario"];

}else{
    redirecionar("/login");
}

?>
</h1>
</body>
</html>