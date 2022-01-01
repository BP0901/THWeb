<?php
function checkEmail($email) {
    $regex = "/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i";
    return preg_match($regex, $email) ? TRUE : FALSE;
}

function checkLengthPw($password){
    return strlen($password) > 7 ? TRUE : FALSE;
}