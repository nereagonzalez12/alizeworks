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
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)

    {
        $type = Type::find($id);

        if (!$type) {
            $data = [
                'status' => 404,
                'message' => 'Type not found',
            ];
            return response()->json($data, 404);
        };

        $data = [
            'status' => 200,
            'data' => $type,
        ];
        return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
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

        $type = Type::find($id);
        if (!$type) {
            $data = [
                'status' => 404,
                'message' => 'Type not found',
            ];
            return response()->json($data, 404);
        };
        $type->update($request->all());

        $data = [
            'status' => 200,
            'message' => 'Type updated successfully',
            'data' => $type
        ];
        return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage partially.
     */
    public function updatePartial(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'unique:types',
        ]);

        if ($validator->fails()) {
            $data = [
                'status' => 400,
                'message' => "Validation error",
                'errors' => $validator->errors(),
            ];
            return response()->json($data, 400);
        }

        $type = Type::find($id);
        if (!$type) {
            $data = [
                'status' => 404,
                'message' => 'Type not found',
            ];
            return response()->json($data, 404);
        };
        $type->update($request->all());

        $data = [
            'status' => 200,
            'message' => 'Type updated successfully',
            'data' => $type
        ];
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $type = Type::find($id);

        if (!$type) {
            $data = [
                'status' => 404,
                'message' => 'Type not found',
            ];
            return response()->json($data, 404);
        };

        $type->delete();
        $data = [
            'status' => 200,
            'message' => 'Type deleted',
        ];
        return response()->json($data, 200);
    }
}
