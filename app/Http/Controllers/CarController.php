<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::paginate(5);

        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    public function create ()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $car = new Car;
        $car->model = $request->model;
        $car->brand = $request->brand;
        $car->seater = $request->seater;
        $car->price = $request->price;
        $car->save();


        return $car;
    }

    public function edit($id)
    {
        $car = Car::find($id);

        return $car;
    }


}
