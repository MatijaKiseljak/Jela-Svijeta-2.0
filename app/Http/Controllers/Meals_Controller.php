<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Meals_Controller extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $meals = Meal::paginate($perPage);
        return view('meals', ['meals' => $meals, 'perPage' => $perPage]);
    }

    public function jezici() {
        $meals = Meal::all();
        $jezici = ['hr' => 'Hrvatski', 'en' => 'Engleski'];
        return view('meals', ['meals' => $meals, 'jezici' => $jezici]);
    }
}
