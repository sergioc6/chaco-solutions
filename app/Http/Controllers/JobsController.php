<?php


namespace App\Http\Controllers;


use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        return $this->successResponse(Job::all());
    }

    public function create(Request $request)
    {
        return $this->successResponse(Job::create($request->all()));
    }

    public function edit(Request $request, $id)
    {
        $job = Job::find($id);
        $job->fill($request->all());
        return $this->successResponse($job);
    }

    public function show($id)
    {
        return $this->successResponse(Job::find($id));
    }

    public function delete($id)
    {
        return $this->successResponse(Job::destroy($id));
    }

    public function paginate()
    {
        return $this->successResponse(Job::paginate());
    }
}
