<?php

//$sensitiveData = "Krossing";
//
//$salt = bin2hex(random_bytes(16)); // Generate random salt
//$pepper = "ASecretPepperString";
//
//$dataToHash = $sensitiveData . $salt . $pepper;
//$hash = hash("sha256", $dataToHash);
//
////echo "<br>". $hash;

// a hash function to hash a password

$pwdSignup = "Krossing";

$options = [
    'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = "Krossing";

// this function is able to compare plaintext pw to hashed value -- how does it know encryption?
password_verify($pwdLogin, $hashedPwd);

