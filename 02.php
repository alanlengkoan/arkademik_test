<?php
// fungsi untuk username
function checkUsername($username)
{
    $regex = "/^x[A-Z]+x\z/";
    if(preg_match($regex, $username))
    {
        return true;
    } else {
        return false;
    }
}

// fungsi untuk password
function checkPassword($password)
{
    $regex = "/^[a-zA-Z0-9\W]+XXX\z/";
    if(preg_match($regex, $password))
    {
        return true;
    } else {
        return false;
    }
}

$username = 'xFATHURx';
$password = 'kick2XXX';

var_dump(checkUsername($username));
echo "<br />";
var_dump(checkPassword($password));