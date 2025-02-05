<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Http\Resources\CarResource;
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
        // $cars = Car::all();
        $cars = Car::with('category')->get();
        if($cars->isEmpty())
        {
            return response()->json(["message" => "No car found"], 404);
        }
        return response()->json(CarResource::collection($cars));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        // $car = new Car();
        // $car->type = $request->type;
        // $car->model = $request->model;
        // $car->price = $request->price;
        // $car->year = $request->year;
        // $car->color = $request->color;
        // $car->horsepower = $request->horsepower;
        // $car->save();

        $car = Car::create($request->all());

        return response()->json(new CarResource($car));
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
        return response()->json(new CarResource($car));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, $id)
    {
        $car = Car::find($id);
        if(!$car)
        {
            return response()->json(["message" => "No car found"], 404);
        }
        $car->update($request->all());
        return response()->json($car);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        if(!$car)
        {
            return response()->json(["message" => "No car found"], 404);
        }
        $car->delete();
        return response()->noContent();
    }

    public function searchByType($type){
        $cars = Car::where('type', 'like', '%' . $type . '%')->get();
        if($cars->isEmpty()){
            return response()->json(["message" => "No car found"], 404);
        }
        return response()->json(CarResource::collection($cars));

    }
}
