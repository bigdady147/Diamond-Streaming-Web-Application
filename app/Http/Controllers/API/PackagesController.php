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
            'foundation_id' => $request->input('foundation_id'),
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
        $package->foundation_id = $request->input('foundation_id');
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

    public function loadList(Request $request)
    {
        $package = new Packages();

        $page = $request->input('page', 1);
        $limit = $request->input('limit', 10);
        $offset = ($page - 1) * $limit;
        if ($request->has('filters')) {
            $package = Packages::where('foundation_id', 'like', '%' . $request->filters . '%');
        }
        $packages = $package->limit($limit)->offset($offset)->with('foundation')->get();
        $total = $package->count();
        return response()->json([
            'data' => $packages,
            'meta' => [
                'total' => $total,
                'page' => $page,
                'limit' => $limit,
                'last_page' => ceil($total / $limit)
            ]
        ]);
    }

}
