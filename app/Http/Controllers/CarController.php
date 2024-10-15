<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Car::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = Car::query()->create([
            'model' => $request->model,
            'color' => $request->color,
            'year' => $request->year,
            'plate_number' => $request->plate_number,
            'owner_id' => $request->owner_id,
        ]);

        return response()->json([
            'message' => 'Car created successfully',
            'status' => 'success',
            'token' => $car,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::query()->findOrFail($id);
        return response()->json([
            'message' => 'Car retrieved successfully',
            'status' => 'success',
            'token' => $car,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Car::query()->findOrFail($id);
        $car->update([
            'model' => $request->model,
            'color' => $request->color,
            'year' => $request->year,
            'plate_number' => $request->plate_number,
            'owner_id' => $request->owner_id,
        ]);

        return response()->json([
            'message' => 'Car updated successfully',
            'status' => 'success',
            'token' => $car,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::query()->findOrFail($id);
        $car->delete();
        return response()->json([
            'message' => 'Car deleted successfully',
            'status' => 'success',
            'token' => $car,
        ]);
    }
}
