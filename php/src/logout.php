<?php
// TODO acabar amb el joc 0,25p
unset($_SESSION['nick']);
unset($_SESSION['partidas']);
unset($_SESSION['ganada']);
unset($_SESSION['perdida']);
unset($_SESSION['partidaActual']);
header("Location:inici.php");