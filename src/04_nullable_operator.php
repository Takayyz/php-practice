<?php

$country = null;
$session = null;

// if ($session !== null) {
//     $user = $session->user;

//     if ($user !== null) {
//         $address = $user->getAddress();

//         if ($address !== null) {
//             $country = $address->country;
//         }
//     }
// }

$country = $session?->user
                ?->getAddress()
                ?->countory;
var_dump($country);
