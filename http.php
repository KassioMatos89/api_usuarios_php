<?php
// Criada esta função para responder 'OK' quando o o método for 'options'.
function sendResponse($array, $statusCode) {
    http_response_code($statusCode);
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Request-Headers: origin, x-requested-with');
    header('Access-Control-Allow-Methods: *');
    header('Content-Type: application/json');
}