<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Request-Headers: origin, x-requested-with');
header('Aceess-Control-Allow-Methods: *');
header('Content-Type: application/json');
echo json_encode($array);
exit;