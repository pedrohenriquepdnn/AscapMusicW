<?php

session_start();
unset($_SESSION['artista']);
unset($_SESSION['senha']);
header('Location: home.php');

?>
<?php

session_start();
unset($_SESSION['admin']);
unset($_SESSION['senha']);
header('Location: home.php');

?>