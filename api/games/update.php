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

$game->name = $data->name;
$game->date = $data->date;
$game->ganre_id = $data->ganre_id;
$game->votes = $data->votes;
$game->players = $data->players;
$game->author = $data->author;

if (!$game->update()) {
    http_response_code(503);
    echo json_encode(array("message" => "Невозможно обновить игру."), JSON_UNESCAPED_UNICODE);
}

http_response_code(201);

echo json_encode(array("message" => "Игра обновлена"), JSON_UNESCAPED_UNICODE);