<?php

session_start();
unset($_SESSION['name']);
unset($_SESSION['surname']);
unset($_SESSION['email']);
unset($_SESSION['phone_number']);
unset($_SESSION['login']);
unset($_SESSION['password']);
unset($_SESSION['birthday']);
unset($_SESSION['notes']);
header('Location:terragigalula.php');
