<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JasonController extends Controller
{
    //
    public function index()
    {
    $response = Http::get("https://jsonplaceholder.typicode.com/posts");
    //here  $response->jason()  is decoded into php array
    $data = $response->json();
    return view("jason", ["a" => $data]);
    }
}
