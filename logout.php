<?php
session_start();
session_destroy();
unset($_COOKIE['usuario']); // Apaga o $_Cookie usando unset da memória do computador
setcookie('usuario', ''); // Define o Cookie como uma string vazia para ter certeza que apagou.
header('Location: login.php');