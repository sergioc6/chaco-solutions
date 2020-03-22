<?php


namespace App\Http\Controllers;


use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends ApiController
{
    public function index()
    {
        return $this->successResponse(Client::all());
    }

    public function create(Request $request)
    {
        return $this->successResponse(Client::create($request->all()));
    }

    public function edit(Request $request, $id)
    {
        $client = Client::find($id);
        $client->fill($request->all());
        return $this->successResponse($client);
    }

    public function show($id)
    {
        return $this->successResponse(Client::find($id));
    }

    public function delete($id)
    {
        return $this->successResponse(Client::destroy($id));
    }

    public function paginate()
    {
        return $this->successResponse(Client::paginate());
    }
}
