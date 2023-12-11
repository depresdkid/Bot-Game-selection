<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once "../config/database.php";
include_once "../objects/games.php";

$database = new Database();
$db = $database->getConnection();
$game = new Games($db);

$data = json_decode(file_get_contents("php://input"));

$game->id = $data->id;

if (!$game->delete()) {
    http_response_code(503);
    echo json_encode(array("message" => "Невозможно удалить игру."), JSON_UNESCAPED_UNICODE);
}

http_response_code(201);

echo json_encode(array("message" => "Игра удалена"), JSON_UNESCAPED_UNICODE);