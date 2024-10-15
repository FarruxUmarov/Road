<?php

namespace App\Http\Controllers;

use App\Models\Fine;
use Illuminate\Http\Request;

class FineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Fine::all());
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
        $fine = Fine::query()->create([
            'plate_number' => $request->plate_number,
            'amount' => $request->amount,
            'date' => $request->date,
            'type' =>$request->type,
            'car_id' => $request->car_id,
        ]);
        return response()->json([
            'message' => 'Fine created successfully',
            'status' => 'success',
            'token' => $fine,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Fine::query()->findOrFail($id);
        return response()->json([
            'message' => 'Fine ok',
            'status' => 'success',
            'token' => $user,
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
        $user = Fine::query()->findOrFail($id);
        $user->update([
            'plate_number' => $request->plate_number,
            'amount' => $request->amount,
            'date' => $request->date,
            'type' =>$request->type,
            'car_id' => $request->car_id,
        ]);
        return response()->json([
            'message' => 'Fine updated successfully',
            'status' => 'success',
            'token' => $user,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Fine::query()->findOrFail($id);
        $user->delete();
        return response()->json([
            'message' => 'Fine deleted successfully',
            'status' => 'success',
            'token' => $user,
        ]);
    }
}
