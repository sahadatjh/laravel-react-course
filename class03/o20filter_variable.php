<?php
// $email = "sahadtjh@gmail";
$email = "sahadtjh@gmail.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "This is an Email\n";
}


if (!filter_has_var(INPUT_GET, 'email')) {
    echo "Email Not Found";
} else {
    echo "Email Found";
}
