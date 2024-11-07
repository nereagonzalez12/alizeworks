<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypeRequest;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return response()->json([
            'status' => 200,
            'message' => 'Types retrieved successfully',
            'data' => $types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:types',
        ]);

        if ($validator->fails()) {
            $data = [
                'status' => 400,
                'message' => "Validation error",
                'errors' => $validator->errors(),
            ];
            return response()->json($data, 400);
        }

        $type =  Type::create($request->all());

        if (!$type) {
            $data = [
                'status' => 500,
                'message' => "Error creating type",
            ];
            return response()->json($data, 500);
        }

        $data = [
            'status' => 201,
            'message' => 'Type created successfully',
            'data' => $type,
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
