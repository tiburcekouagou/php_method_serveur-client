<?php

// phpinfo();
// exit();

/**
 * file_get_contents() - fonction native
 * curl - fonction native
 * guzzle - librairie
 */

/*=====================================
 PHP - file_get_contents
    file_get_contents("nom_fichier", liste_des_chemin_où_chercher_le_fichier)
 Lit tout un fichier dans une chaîne
 =====================================*/
/*
METHODE GET
$option = [
    "http" => [
        "method" => "GET",
        "header" => "Content-Type: application/json"
    ]
];

$context = stream_context_create($option);

$data = file_get_contents("https://jsonplaceholder.typicode.com/users/2", false, $context);

var_dump($data);
*/
$option = [
    "http" => [
        "method" => "POST",
        "header" => "Content-Type: application/json",
        "content" => json_encode([
            'title' => 'Mon super titre',
            'body' => 'contenu du paragraph'
        ])
    ]
];

$context = stream_context_create($option);

$data = file_get_contents("https://jsonplaceholder.typicode.com/posts/1", false, $context);
// $code = $http_response_header;

var_dump($data);

echo "<br>";

var_dump($code);