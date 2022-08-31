<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        return response()->json([
            ['id' => '1'], ['id' => '2'], ['id' => '3']
        ]);
    }
}
