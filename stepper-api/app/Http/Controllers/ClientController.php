<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Resources\ClientResource;
use App\Models\Client as ClientTable;

class ClientController extends Controller
{
    public function store(ClientRequest $request)
    {
        $client_info = ClientTable::create($request->validated());
        return response()->json([
            'message' => 'Client information stored successfully!',
            'status' => 200,
            'client' => new ClientResource($client_info)]);
    }
}
