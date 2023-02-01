<?php

/*=====================================
 PHP - curl (Client URL)
 =====================================*/
/*
METHODE GET
//  $ch = curl_init("https://jsonplaceholder.typicode.com/posts/1");
// initialisation de la connection à l'API
$ch = curl_init();

// définition des paramètres de la requête
curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts/1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

// recherche les données
$data = curl_exec($ch);
var_dump($data);

// arrête la connection à l'api
curl_close($ch);

*/

// METHODE POST
//  $ch = curl_init("https://jsonplaceholder.typicode.com/posts/1");
// initialisation de la connection à l'API
// charge utile (en: payload) => données envoyées au serveur (souvent via un formulaire)
$payload = json_encode([
    'title' => 'Mon super titre',
    'body' => 'contenu du paragraph'
]);

$header = array('Content-type: application/json');

$ch = curl_init();

// définition des paramètres de la requête
curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");
/*
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
*/
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => $header,
    CURLOPT_POSTFIELDS => $payload,
]);
// recherche les données
$data = curl_exec($ch);
var_dump($data);

// arrête la connection à l'api
curl_close($ch);
