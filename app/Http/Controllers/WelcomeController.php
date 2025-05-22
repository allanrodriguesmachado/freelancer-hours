<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request): object
    {
        return view('welcome');
    }

    public function index(): View
    {
        return view('welcome');
    }
}
