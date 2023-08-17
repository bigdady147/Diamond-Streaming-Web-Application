<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Foundation;
use Illuminate\Http\Request;

class FoundationController extends Controller
{
    //
    public function create(Request $request)
    {
        $foundation = new Foundation();
        $foundation->createFoundation($request->all());
        return response()->json(['message' => 'Foundation created successfully']);
    }

    public function update(Request $request, $id)
    {
        $foundation = new Foundation();
        $foundation->updateFoundation($id, $request->all());
        return response()->json(['message' => 'Foundation updated successfully']);
    }

    public function delete($id)
    {
        $foundation = new Foundation();
        $foundation->deleteFoundation($id);
        return response()->json(['message' => 'Foundation deleted successfully']);
    }

    public function loadList()
    {
        $foundation = new Foundation();
        return response()->json($foundation->loadList());
    }
}
