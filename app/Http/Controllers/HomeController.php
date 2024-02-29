<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome', [
            "notes" => Note::all()
        ]);
    }
}
