<?php

$letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!£%&abcdefghijklmnopqrstuvwxyz';

$password = '';

if (isset($_GET['length'])) {
    $passwordlength = intval($_GET['length']);
    for ( $i = 0; $i < $passwordlength; $i++ ) { 
       $randomNumber = rand(0, strlen($letters) - 1);
       $password .= $letters[$randomNumber];
    }
}
