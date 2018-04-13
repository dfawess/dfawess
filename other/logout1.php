<?php

session_start();
unset($_SESSION['n']);
unset($_SESSION['n+1']);
unset($_SESSION['f']);
header('Location:odnom.php');
