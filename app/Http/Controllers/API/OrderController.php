<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        $order = new Order();
        $order->createOrder($request->all());
        return response()->json(['message' => 'Order created successfully']);
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->nickname = $request->input('nickname');
        $order->phone = $request->input('phone');
        $order->packages_id = $request->input('packages_id');
        $order->foundations_id = $request->input('foundations_id');
        $order->supporters_id = $request->input('supporters_id');
        $order->id_app = $request->input('id_app');
        $order->status = $request->input('status');
        $order->save();
        return response()->json([
            'message' => 'Order updated successfully',
            'order' => $order
        ], 200);


    }

    public function delete($id)
    {
        Order::destroy($id);
        return response()->json(['message' => 'Order deleted successfully']);
    }

    public function loadList(Request $request)
    {
        $order = new Order();
        if(isset($this->request->filters['fields'])){
            $order = $order->select($this->request->filters['fields']);
        };
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 10);
        $offset = ($page - 1) * $limit;
        $orders = $order->loadList($offset, $limit);
        $total = $order->count();
        return response()->json([
            'data' => $orders,
            'meta' => [
                'total' => $total,
                'page' => $page,
                'limit' => $limit,
                'last_page' => ceil($total / $limit)
            ]
        ]);
    }
}
