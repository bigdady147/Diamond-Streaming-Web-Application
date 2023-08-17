<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Packages;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    //
    public function create(Request $request)
    {
        $package = new Packages([
            'full_name' => $request->input('full_name'),
            'status' => $request->input('status'),
            'price' => $request->input('price'),
            'count' => $request->input('count'),
            'foundations_id' => $request->input('foundations_id')
        ]);
        $package->save();

        return response()->json([
            'message' => 'Package created successfully',
            'package' => $package
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $package = Packages::find($id);
        $package->full_name = $request->input('full_name');
        $package->status = $request->input('status');
        $package->price = $request->input('price');
        $package->count = $request->input('count');
        $package->foundations_id = $request->input('foundations_id');
        $package->save();

        return response()->json([
            'message' => 'Packages updated successfully',
            'package' => $package
        ], 200);
    }

    public function delete($id)
    {
        Packages::destroy($id);

        return response()->json([
            'message' => 'Packages deleted successfully'
        ], 200);
    }

    public function loadList()
    {
        return Packages::with('foundation')->get();
    }
}
