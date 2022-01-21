<?php
if (!$_SESSION['login']) {
    header('location: login.php');
}