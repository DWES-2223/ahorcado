<?php
require_once ('../vendor/autoload.php');
session_start();


if (!isset($_SESSION['nick'])){
    header("Location:inici.php");
} else {
    $nick = $_SESSION['nick'];
}


?>


<html>
<head>
    <title>Puntuacio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous">
</head>
<body>
<?php
include_once ("header.php");

// TODO mostrar puntuacions 0,5P

?>
</body>
</html>
