<?php
if ($_SERVER['REQUEST_URI'] == '/') {
    header('Location: /cs/login.html');
    exit;
}
?>