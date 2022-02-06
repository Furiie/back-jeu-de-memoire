<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Création de nos routes permettant d'acceder à notre API sur http://localhost:8000/api/players
// En fonction de la méthode HTTP: GET POST PUT DELETE
$router->group(['prefix' => 'api'], function () use ($router) {
    //GET: Permet d'acceder à tous les "players"
    $router->get('players',  ['uses' => 'PlayerController@showAllPlayers']);
  
    //GET /id: Permet d'acceder à un "player" en fonction de son ID
    $router->get('players/{id}', ['uses' => 'PlayerController@showOnePlayer']);
  
    //POST:  Permet d'ajouter un nouveau "player"
    $router->post('players', ['uses' => 'PlayerController@create']);
  
    // DELETE: Permet de supprimer un "player" en fonction de son ID
    $router->delete('players/{id}', ['uses' => 'PlayerController@delete']);
  
    // PUT: Permet de modifier un "player" en fonction de son ID 
    $router->put('players/{id}', ['uses' => 'PlayerController@update']);
  });

  /* A ce moment là on peut tester nos routes grace à POSTMAN (ou Insomnia) pour voir si nos routes fonctionnent:

  Exemple : 
  Methode GET : http://localhost:8000/api/players/ On doit pouvoir recuperer nos données (bon pour le moment
  il n'y en a pas :) )
  Methode POST : http://localhost:8000/api/players/
   On selectionne form-data sur POSTMAN: 
     KEY : Name 
     VALUE: Michel
     KEY : Score 
     VALUE: 150

    Puis Send

    Normalement on créé un nouveau "player". 
    Si ensuite on refait la méthode GET, on obtien : 
    [
        {
            "id": 1,
            "name": "Michel",
            "score": 150,
            "created_at": "2022-02-06T18:32:30.000000Z",
            "updated_at": "2022-02-06T18:32:30.000000Z"
        }
    ]
    */

