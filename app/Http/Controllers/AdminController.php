<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming User model is in App\Models namespace
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function showUsers()
    {
        if (Auth::check() && Auth::user()->id == 1) {
            // The user is logged in and their ID is 1, show the users
            $users = User::all();
            return view('view1', ['users' => $users]);
        }

        // The user is not logged in or their ID is not 1, redirect them to the home page
        return redirect('/');
    }
}
