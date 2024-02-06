<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PivotController extends Controller
{
    public function getData()
    {
        $user = User::find(1); // Verander dit naar de gewenste gebruiker
        $roles = $user->roles;

        return view('pivot-data', compact('user', 'roles'));
    }
}
