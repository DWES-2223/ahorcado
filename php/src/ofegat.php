<?php
require_once ('../vendor/autoload.php');
session_start();
use Jocs\Clases\Ofegat;
use Jocs\Exceptions\OfegatException;
use Jocs\Util\LogFactory;

if (!isset($_SESSION['nick'])){
    header("Location:inici.php");
} else {
    $nick = $_SESSION['nick'];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // TODO Que faig quan he marcat una lletra (1p)
    // TODO guarda el log (0,5p)

}





?>


<html>
<head>
    <title>Autorizacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous">
</head>
<body>
<?php
include_once ("header.php");
// TODO Pinta l'estat del joc actual (0,25p)
// TODO FI DEL JOC (1p)

?>
<form method="post" action="ofegat.php">
    <div class="form-group row">
        <label for="lletra" class="col-4 col-form-label">Lletra</label>
        <div class="col-8">
            <div class="input-group">
                <input id="lletra" name="lletra" placeholder="Lletra" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<form method="post" action="ofegat.php">
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="continuar" type="submit" class="btn btn-primary">Continuar</button>
        </div>
    </div>
</form>
</body>
</html>
