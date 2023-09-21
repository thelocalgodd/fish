<?php
$name = $_POST['fname'];
$email = $_POST['email'];
$address = $_POST['address'];

$data = file_get_contents('data.json');
$json_data = json_decode($data, true);


$json_data[] = [
    'name' => $name,
    'email' => $email,
    'address' => $address
];

$data = json_encode($json_data);
file_put_contents('data.json', $data);

header('Location: success.html');
?>