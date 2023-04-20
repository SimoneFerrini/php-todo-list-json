<?php

//creare una stringa php da json:
$todosList = json_decode(file_get_contents('todos.json'));

header('Content-Type: application/json');

echo json_encode($todosList);