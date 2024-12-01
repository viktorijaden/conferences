<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();

        return view('user_client.client', compact('conferences'));
    }
}

