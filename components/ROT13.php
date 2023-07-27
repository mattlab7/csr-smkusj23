<?php
function encryptPassword($password)
{
    $encryptedPassword = '';
    $length = strlen($password);
    for ($i = 0; $i < $length; $i++) {
        $char = $password[$i];
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $ascii = ($ascii >= 65 && $ascii <= 90) ? (($ascii - 65 + 13) % 26 + 65) : (($ascii - 97 + 13) % 26 + 97);
            $char = chr($ascii);
        } elseif (ctype_digit($char)) {
            $digit = intval($char);
            $digit = ($digit >= 0 && $digit <= 9) ? (($digit - 0 + 5) % 10 + 0) : $digit;
            $char = strval($digit);
        }
        $encryptedPassword .= $char;
    }
    return $encryptedPassword;
}

function decryptPassword($encryptedPassword)
{
    // ROT13 is a symmetrical cipher, so decryption is the same as encryption
    return encryptPassword($encryptedPassword);
}

?>