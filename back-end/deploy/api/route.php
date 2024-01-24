<?php

$app->options('/api/catalogue', 'optionsCatalogue');

// $app->options('/{routes:.+}', function ($request, $response, $args) {
// 	return $response;
// });

$app->get('/api/hello/{name}', 'hello');

//$app->options('/api/catalogue', 'optionsCatalogue');

// API Nécessitant un Jwt valide
$app->get('/api/catalogue/{filtre}', 'getSearchCatalogue');

// API Nécessitant un Jwt valide
$app->get('/api/catalogue', 'getCatalogue');

$app->options('/api/utilisateur', 'optionsUtilisateur');

// API Nécessitant un Jwt valide
$app->get('/api/utilisateur', 'getUtilisateur');

// APi d'authentification générant un JWT
$app->post('/api/utilisateur/login', 'postLogin');

$app->post('/api/register', 'postRegister');

$app->post('/api/utilisateur/logout', 'postLogout');
