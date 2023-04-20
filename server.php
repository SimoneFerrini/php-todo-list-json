<?php

if(isset($_POST['newTodo'])){
    //se ricevo parametro lo aggiungo a file json:
    $todos = json_decode(file_get_contents("todos.json"));
    print_r($todos);
    $todos[] = $_POST['newTodo'];

    print_r($todos);

    $newTodoJSON = json_encode($todos);

    file_put_contents("todos.json", $newTodoJSON);
}else{

    //creare una stringa php da json:
    $todosList = json_decode(file_get_contents('todos.json'));
    
    header('Content-Type: application/json');
    
    echo json_encode($todosList);
};