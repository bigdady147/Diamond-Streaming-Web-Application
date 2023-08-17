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
//    public function index()
//    {
//        $page = 0;
//        $per_page = 30;
//        $order = Order::where('id', '<>', null);
////        if (isset($request->keyword)) {
////            $post = Order::where('contents', 'like', '%' . $request->keyword . '%')->orWhere('topic', 'like', '%' . $request->keyword . '%');
////        }
//        if (isset($request->page)) {
//            $page = $request->page;
//        }
//        if (isset($request->per_page)) {
//            $per_page = $request->per_page;
//        }
//        if (isset($request->order)) {
//            $per_page = $request->per_page;
//        }
//        return $order->limit($per_page)->offset($page * $per_page)->get();
//    }
//
//
//    public function create(Request $request)
//    {
//        return $request->all();
//    }
//
//
//    public function store(Request $request)
//    {
//        $type = new Order();
//        $type->id = $request->id;
//        $type->save();
//        return Order::where('id', $type->id)->first();
//    }
//
//
//    public function show($id)
//    {
//        $order = Order::where('id', $id)->first();
//        if (empty($order)) {
//            return response(['status' => false, 'message' => 'Failed'], 400);
//        }
//        return $order;
//    }
//
//
//    public function edit($id)
//    {
//
//    }
//
//
//    public function update(Request $request, $id)
//    {
//        $type = Order::find($id);
//        if (!empty($type)) {
//            if (!empty($request->nick_name)) {
//                $type->nick_name = $request->nick_name;
//                $type->save();
//                return Order::where('id', $id)->first();
//            }
//        }
//        return response(['status' => false, 'message' => 'Failed'], 400);
//    }
//
//    public function destroy($id)
//    {
//        $type = Order::where('id', $id)->first();
//        if (empty($type)) {
//            return response(['status' => false, 'message' => 'Failed'], 400);
//        } else {
//            $type->delete();
//            return response(['status' => true, 'message' => 'Success'], 200);
//        }
//    }
    public function create(Request $request)
    {
        $order = new Order();
        $order->createOrder($request->all());
        return response()->json(['message' => 'Order created successfully']);
    }

    public function update(Request $request, $id)
    {
        $order = new Order();
        $order->updateOrder($id, $request->all());
        return response()->json(['message' => 'Order updated successfully']);
    }

    public function delete($id)
    {
        $order = new Order();
        $order->deleteOrder($id);
        return response()->json(['message' => 'Order deleted successfully']);
    }

    public function loadList(Request $request)
    {
        $order = new Order();
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
