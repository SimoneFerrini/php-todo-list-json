<?php

if(isset($_POST['name'])){
    //se ricevo parametro lo aggiungo a file json:
    $todos = json_decode(file_get_contents("todos.json"));
    
    $newTodo = [
        'name' => $_POST['name'],
        'done' => false,
    ];

    $todos[] = $newTodo;

    $newTodoJSON = json_encode($todos);

    file_put_contents("todos.json", $newTodoJSON);
}else{

    //creare una stringa php da json:
    $todosList = json_decode(file_get_contents('todos.json'));
    
    header('Content-Type: application/json');
    
    echo json_encode($todosList);
};