<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Models\ClientModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Méthode pour créer un nouvel utilisateur
    public function store(StoreClientRequest $request)
    {
        $client = ClientModel::create($request->all());

        return response()->json([
            'message' => 'Client ajouté avec succès.',
            'client' => $client,
        ], 201);
    }

    // Méthode pour lister tous les utilisateurs
    public function index()
    {
        $clients = ClientModel::all();
        return response()->json($clients);
    }
}
