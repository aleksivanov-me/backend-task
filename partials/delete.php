<?php

$dataset = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/dataset/users.json');
$dataset = json_decode($dataset, true);

$rowid = (int) $_GET['rowid'];

foreach ($dataset as $key => $row) {
    if ($row['id'] == $_GET['rowid']) {
        unset($dataset[$key]);
    }
}

$dataset = json_encode($dataset, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

file_put_contents($_SERVER['DOCUMENT_ROOT'].'/dataset/users.json', $dataset);

http_response_code(200);
