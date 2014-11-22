<?php

require 'utils.php';
initRedbean();

$user = R::dispense( 'user' );

$name = $_POST[name];
$phone = $_POST[phone];
$city = $_POST[city];

$user->name = $name;
$user->phone = $phone;    
$user->city = $city;

$id = R::store( $user );
// echo $id;
