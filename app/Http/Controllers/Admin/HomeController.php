<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {

        $endOfCurrentMonth = Carbon::now()->endOfMonth()->endOfDay();
        $now = Carbon::now();

        $diffInDays = $endOfCurrentMonth->diffInDays($now);

        $user = Auth::user();
        /*
        $id = Auth::id();

        if (Auth::check()) {
            echo "Sei loggato!";
        } else {
            echo "Non sei loggato!";
        }
        */
        return view('admin.home', compact('user', 'diffInDays'));
    }
}
