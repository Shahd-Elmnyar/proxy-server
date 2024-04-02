<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ProxyController extends Controller
{
    public function handle(Request $request)
    {
        // Extract request data from client
        $url = $request->input('url');
        $headers = $request->input('headers');
        $body = $request->input('body');

        // Forward request to API server
        $response = Http::withHeaders($headers)->post($url, $body);

        // Send response back to client
        return $response->body();
    }
}
