<?php

// here also should be the validation of the data
// and, surely, we should clear input before doing anything

$dataset = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/dataset/users.json');
$dataset = json_decode($dataset, true);

foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars(addslashes(trim($value))); // as all post values are strings
}

$data = [];
$data['id'] = (int) end($dataset)['id'] + 1;
$data['name'] = $_POST['name'];
$data['username'] = $_POST['username'];
$data['email'] = $_POST['email'];
$data['phone'] = $_POST['phone'];
$data['website'] = $_POST['website'] ? $_POST['website'] : '';

$data['address'] = [];
$data['address']['street'] = $_POST['street'];
$data['address']['suite'] = $_POST['suite'];
$data['address']['city'] = $_POST['city'];
$data['address']['zipcode'] = $_POST['zipcode'];
$data['address']['geo'] = [];
$data['address']['geo']['lat'] = $_POST['lat'] ? $_POST['lat'] : '';
$data['address']['geo']['lng'] = $_POST['lon'] ? $_POST['lon'] : '';

$data['company'] = [];
$data['company']['name'] = $_POST['companyName'];
$data['company']['catchPhrase'] = $_POST['companycatchPhrase'] ? $_POST['companycatchPhrase'] : '';
$data['company']['bs'] = $_POST['companybs'] ? $_POST['companybs'] : '';

$dataset[] = $data;

$dataset = json_encode($dataset, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
file_put_contents($_SERVER['DOCUMENT_ROOT'].'/dataset/users.json', $dataset);

header('Location: /');
