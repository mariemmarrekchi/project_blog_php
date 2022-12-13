<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['motpass']);
unset($_SESSION['code']);

header("location:../vue/singin.php");