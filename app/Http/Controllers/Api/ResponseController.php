<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ResponseController extends Controller
{
    public function send(array $response, int $code = 200, array $headers = []): JsonResponse
    {
        return response()->json($response, $code, $headers);
    }

    public function sendSuccess(array $data, int $code = 200)
    {
        $response['success'] = true;

        if ($data) {
            $response['data'] = $data;
        }

        return $this->send($response, $code);
    }

    public function sendError(array $data, int $code = 500)
    {
        $response['success'] = false;

        if ($data) {
            $response['data'] = $data;
        }

        return $this->send($response, $code);
    }
}
