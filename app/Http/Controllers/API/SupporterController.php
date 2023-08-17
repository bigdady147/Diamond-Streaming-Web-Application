<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Supporter;
use Illuminate\Http\Request;
class SupporterController extends Controller
{
    //
    public function create(Request $request)
    {
        $supporter = new Supporter();
        $supporter->createOrder($request->all());
        return response()->json(['message' => 'Order created successfully']);
    }

    public function update(Request $request, $id)
    {
        $supporter = new Supporter();
        $supporter->updateOrder($id, $request->all());
        return response()->json(['message' => 'Order updated successfully']);
    }

    public function delete($id)
    {
        $supporter = new Supporter();
        $supporter->deleteOrder($id);
        return response()->json(['message' => 'Order deleted successfully']);
    }

    public function loadList(Request $request)
    {
        $supporter = new Supporter();
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 10);
        $offset = ($page - 1) * $limit;
        $supporters = $supporter->loadList($offset, $limit);
        $total = $supporter->count();
        return response()->json([
            'data' => $supporters,
            'meta' => [
                'total' => $total,
                'page' => $page,
                'limit' => $limit,
                'last_page' => ceil($total / $limit)
            ]
        ]);
    }
}
