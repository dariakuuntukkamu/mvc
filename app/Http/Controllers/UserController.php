<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $payload['user'] = 'Siti Mutamimah - Universitas Amikom Purwokerto';
        
        $payload['modelUser'] = User::all();
        return view('index', $payload); 
    }
}
