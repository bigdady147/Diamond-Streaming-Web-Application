<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Banking;
use Illuminate\Http\Request;

class BankingController extends Controller
{
    //
    public function create(Request $request)
    {
        $banking = new Banking([
            'username' => $request->input('username'),
            'banking_name' => $request->input('banking_name'),
            'account_type' => $request->input('account_type'),
            'account_number' => $request->input('account_number'),
            'branch' => $request->input('branch'),
            'status' => $request->input('status'),
        ]);
        $banking->save();

        return response()->json([
            'message' => 'Package created successfully',
            'package' => $banking
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $banking = Banking::find($id);
        $banking->username = $request->input('username');
        $banking->banking_name = $request->input('banking_name');
        $banking->account_number = $request->input('account_number');
        $banking->account_type = $request->input('account_type');
        $banking->branch = $request->input('branch');
        $banking->status = $request->input('status');
        $banking->save();
        return response()->json([
            'message' => 'Packages updated successfully',
            'package' => $banking
        ], 200);
    }

    public function delete($id)
    {
        Banking::destroy($id);

        return response()->json([
            'message' => 'Banking deleted successfully'
        ], 200);
    }

    public function loadList(Request $request)
    {
        $banking = new Banking();
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 10);
        $offset = ($page - 1) * $limit;
//        if ($request->has('filters')) {
//            $banking = Banking::where('foundation_id', 'like', '%' . $request->filters . '%');
//        }
        $bankings = $banking->limit($limit)->offset($offset)->get();
        $total = $banking->count();
        return response()->json([
            'data' => $bankings,
            'meta' => [
                'total' => $total,
                'page' => $page,
                'limit' => $limit,
                'last_page' => ceil($total / $limit)
            ]
        ]);
    }
}
