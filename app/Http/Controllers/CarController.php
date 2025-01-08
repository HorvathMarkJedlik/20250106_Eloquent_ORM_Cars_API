<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        if($cars->isEmpty())
        {
            return response()->json(["message" => "No car found"], 404);
        }
        return response()->json($cars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $car = Car::where('id', $id)->first();
        if(!$car){
            return response()->json(["message" => "No car found"], 404);
        }
        return response()->json($car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
