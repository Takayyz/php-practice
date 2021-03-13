<?php

$statusCode = 000;
// switch ($statusCode) {
//     case 200:
//     case 300:
//         $message = null;
//         break;
//     case 400:
//         $message = 'not found';
//         break;
//     case 500:
//         $message = 'server error';
//         break;
//     default:
//         $message = 'unknown status code';
//         break;
// }

$message = match ($statusCode) {
    200,
    300 => null,
    400 => 'not found',
    500 => 'server error',
    default => 'unknown status code'
};

echo '<pre>';
var_dump ($message);
echo '</pre>';
