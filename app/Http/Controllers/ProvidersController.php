<?php


namespace App\Http\Controllers;


use App\Models\Provider;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function index()
    {
        return $this->successResponse(Provider::all());
    }

    public function create(Request $request)
    {
        return $this->successResponse(Provider::create($request->all()));
    }

    public function edit(Request $request, $id)
    {
        $provider = Provider::find($id);
        $provider->fill($request->all());
        return $this->successResponse($provider);
    }

    public function show($id)
    {
        return $this->successResponse(Provider::find($id));
    }

    public function delete($id)
    {
        return $this->successResponse(Provider::destroy($id));
    }

    public function paginate()
    {
        return $this->successResponse(Provider::paginate());
    }
}
