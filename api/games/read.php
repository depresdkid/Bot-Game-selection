<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "../config/database.php";
include_once "../objects/games.php";

$database = new Database();
$db = $database->getConnection();

$game = new Games($db);

$stmt = $game->read();
$num = $stmt->rowCount();

if ($num < 0) {
    http_response_code(404);

    echo json_encode(array("message" => "Игры не найдены"), JSON_UNESCAPED_UNICODE);
}

$games_arr = array();
$games_arr["res"] = array();


while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    extract($row);
    $games_item = array(
        "id" => $id,
        "name" => $name,
        "date" => $date,
        "genre" => $genre,
        "votes" => $votes,
        "players" => $players,
        "author" => $author,
    );
    array_push($games_arr["res"], $games_item);
}

http_response_code(200);

echo json_encode($games_arr);
