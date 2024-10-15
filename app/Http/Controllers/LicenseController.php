<?php

namespace App\Http\Controllers;

use App\Models\License;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(License::all());
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
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required',
            'passport' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'telegram_user_id' => 'required|string|max:255',
        ]);

        $license = License::query()->create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'date_of_birth' => $request->input('date_of_birth'),
            'passport' => $request->input('passport'),
            'phone_number' => $request->input('phone_number'),
            'telegram_user_id' => $request->input('telegram_user_id'),
        ]);

        $token = $license->createToken($license->first_name)->plainTextToken;

        return response()->json([
            'message' => "License Created Successfully",
            'status' => "success",
            'license' => $license,
            'token' => $token,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Http\JsonResponse
    {
        $user = License::query()->findOrFail($id);
        return response()->json([
            'message' => "License Found",
            'status' => "success",
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
        $user = License::query()->findOrFail($id);
        $user->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'date_of_birth' => $request->input('date_of_birth'),
            'passport' => $request->input('passport'),
            'phone_number' => $request->input('phone_number'),
            'telegram_user_id' => $request->input('telegram_user_id'),
        ]);
            return response()->json([
                'message' => "License Updated Successfully",
                'status' => "success",
                'token' => $user
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\JsonResponse
    {
        $user = License::query()->findOrFail($id);
        $user->delete();

        return response()->json([
            'message' => "License Deleted Successfully",
            'status' => "success",
            'token' => $user
        ]);
    }
}
