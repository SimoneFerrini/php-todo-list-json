<?php

$todosList = [
    ['name' => 'Pulire casa',
     'done' => false,
    ],
    ['name' => 'Fare la spesa',
     'done' => false,
    ],
    ['name' => 'Consegnare esercizio Boolean',
     'done' => false,
    ],
];

header('Content-Type: application/json');

echo json_encode($todosList);