<?php


namespace App\Http\Controllers;


class ApiController extends Controller
{

    public function successResponse($data, $message = null, $statusCode = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }

    public function errorResponse($data, $message = null, $statusCode = 500)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }

    public function failResponse($data, $message = null, $statusCode = 404)
    {
        return response()->json([
            'status' => 'fail',
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }
}
