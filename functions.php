<?php
$alphabet = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+');

function generate_password($length = 8) {

    $alphabet = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+');
    $password = "";
    for ($i = 0; $i < $length; $i++) {
        $password .= $alphabet[array_rand($alphabet)];
    }
    return $password;
}

if (isset($_GET["length"]) && $_GET["length"] >= 6 && $_GET["length"] <= 12) {
    $password = generate_password($_GET["length"]);
    session_start();
    $_SESSION["password"] = $password;
    header("Location: feedback.php");
} else {
    $password = "";
}

?>