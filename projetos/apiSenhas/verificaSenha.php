<?php
// See the password_hash() example to see where this came from.
$senha = $_POST['senha'];
$hash = password_hash($senha, PASSWORD_DEFAULT);

if (password_verify('123456', $hash)) {
    echo 'Password is valid!';
    echo "<br>";
    echo $hash;
} else {
    echo 'Invalid password.';
}
 ?>
