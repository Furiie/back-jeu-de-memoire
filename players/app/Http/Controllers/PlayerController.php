<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
     //Creation des méthodes permettant d'interagir avec notre base de donnée

    /*Controller responses:
    response()
        Fonction globale qui permet d'obtenir une instance de la réponse
    response()->json()
        return une réponse en JSON
    200
        HTTP status code qui indique que la requete est ok
    201
        HTTP status code qui indique qu'une nouvelle ressource a été créé
    findOrFail
        envoie ModelNotFoundException s'il ny a pas de résultat */



    // Permet de recuper toutes la liste des "players"
    public function showAllPlayers()
    {
        return response()->json(Player::all());
    }

    // Permet d'acceder à un "player" en fonction de son ID
    public function showOnePlayer($id)
    {
        return response()->json(Player::find($id));
    }

    // Permet d'ajouter un nouveau "player"
    public function create(Request $request)

    {
         $player = Player::create($request->all());

        return response()->json($player, 201);
    }

    // Permet de modifier un "player" en fonction de son ID s'il existe 
    public function update($id, Request $request)
    {
        $player = Player::findOrFail($id);
        $player->update($request->all());

        return response()->json($player, 200);
    }

    // Permet de supprimer un "player" en fonction de son ID s'il existe
    public function delete($id)
    {
        Player::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
