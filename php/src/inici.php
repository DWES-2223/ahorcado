<?php
    require_once ('../vendor/autoload.php');
    session_start();

    use Jocs\Clases\Ofegat;
    use Jocs\Clases\Generador;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // TODO arreplar l'usuari i inicialitzar el joc 1p
        extract($_POST);
        $_SESSION["nick"] = $_POST["nick"];
        $_SESSION["partidas"] = isset($_SESSION['partidas'])?($_SESSION['partidas']):0;
        $_SESSION["ganada"] = isset($_SESSION['ganada'])?($_SESSION['ganada']):0;
        $_SESSION["perdida"] = isset($_SESSION['perdida'])?($_SESSION['perdida']):0;
        $generador = new Generador();
        $palabra = $generador->trauParaula();
        $ahogado = new Ofegat($palabra);
        $ahogado->setNivell($_POST['level']);
        $_SESSION["partidaActual"] = serialize($ahogado);
        header("Location:ofegat.php");
    } else {

?>
<html lang="es">
    <head>
        <title>Login</title>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:300);
            .login-page {
                width: 360px;
                padding: 8% 0 0;
                margin: auto;
            }
            .form {
                position: relative;
                z-index: 1;
                background: #FFFFFF;
                max-width: 360px;
                margin: 0 auto 100px;
                padding: 45px;
                text-align: center;
                box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            }
            .form input {
                font-family: "Roboto", sans-serif;
                outline: 0;
                background: #f2f2f2;
                width: 100%;
                border: 0;
                margin: 0 0 15px;
                padding: 15px;
                box-sizing: border-box;
                font-size: 14px;
            }
            .form button {
                font-family: "Roboto", sans-serif;
                text-transform: uppercase;
                outline: 0;
                background: #4CAF50;
                width: 100%;
                border: 0;
                padding: 15px;
                color: #FFFFFF;
                font-size: 14px;
                -webkit-transition: all 0.3 ease;
                transition: all 0.3 ease;
                cursor: pointer;
            }
            .form button:hover,.form button:active,.form button:focus {
                background: #43A047;
            }
            .form .message {
                margin: 15px 0 0;
                color: #b3b3b3;
                font-size: 12px;
            }
            .form .message a {
                color: #4CAF50;
                text-decoration: none;
            }
            .form .register-form {
                display: none;
            }
            .container {
                position: relative;
                z-index: 1;
                max-width: 300px;
                margin: 0 auto;
            }
            .container:before, .container:after {
                content: "";
                display: block;
                clear: both;
            }
            .container .info {
                margin: 50px auto;
                text-align: center;
            }
            .container .info h1 {
                margin: 0 0 15px;
                padding: 0;
                font-size: 36px;
                font-weight: 300;
                color: #1a1a1a;
            }
            .container .info span {
                color: #4d4d4d;
                font-size: 12px;
            }
            .container .info span a {
                color: #000000;
                text-decoration: none;
            }
            .container .info span .fa {
                color: #EF3B3A;
            }
            body {
                background: #76b852; /* fallback for old browsers */
                background: rgb(141,194,111);
                background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%);
                font-family: "Roboto", sans-serif;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
        </style>
    </head>

    <body>
        <div class="login-page">
            <div class="form">
                <form class="login-form" action="inici.php" method="POST" >
                    <input type="text" name="nick" placeholder="nick"/>
                    Nivell Dificultat:
                    <select name="level">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <input type="submit" name="submit"  />
                </form>
            </div>
        </div>
    </body>
</html>
<?php } ?>

