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
        if ($request->has('zalo_qr')) {
            $imageData = $request->input('zalo_qr');
            list($type, $imageData) = explode(';', $imageData);
            list(, $imageData) = explode(',', $imageData);
            $imageData = base64_decode($imageData);
            $extension = explode('/', $type)[1];
            $imageName = uniqid() . '.' . $extension;
            $imagePath = public_path('supporters/' . $imageName);
            file_put_contents($imagePath, $imageData);
        } else {
            return response()->json(['message' => 'Error No Images Upload']);
        }
        $supporter = new Supporter();
        $supporter->full_name = $request->input('full_name');
        $supporter->banking_id = $request->input('banking_id');
        $supporter->phone = $request->input('phone'); // Lấy tgiá trị của phone từ request
        $supporter->date_of_birth = $request->input('date_of_birth'); // Lấy giá trị của date_of_birth từ request
        $supporter->email = $request->input('email'); // Lấy giá trị của email từ request
        $supporter->zalo_qr = '/supporters/' . $imageName;
        $supporter->save();

        return response()->json(['message' => 'Supporter created successfully']);
    }

    public function update(Request $request, $id)
    {
        $str_zalo = $request->input('zalo_qr');
        if (strpos($str_zalo, '/supporters/') !== false) {
            $supporter = new Supporter();
            $imageName = $request->input('zalo_qr');
            $supporter->full_name = $request->input('full_name');
            $supporter->banking_id = $request->input('banking_id');
            $supporter->status = $request->input('status');
            $supporter->phone = $request->input('phone'); // Lấy tgiá trị của phone từ request
            $supporter->date_of_birth = $request->input('date_of_birth'); // Lấy giá trị của date_of_birth từ request
            $supporter->email = $request->input('email'); // Lấy giá trị của email từ request
            $supporter->zalo_qr = '/supporters/' . $imageName;
            $supporter->updateSupporter($id, $request->all());
            return response()->json(['message' => 'Order updated successfully']);
        } else {
            if ($request->input('zalo_qr') !== null ) {
                $imageData = $request->input('zalo_qr');
                list($type, $imageData) = explode(';', $imageData);
                list(, $imageData) = explode(',', $imageData);
                $imageData = base64_decode($imageData);
                $extension = explode('/', $type)[1];
                $imageName = uniqid() . '.' . $extension;
                $imagePath = public_path('supporters/' . $imageName);
                file_put_contents($imagePath, $imageData);
            }
            $supporter = new Supporter();
            $imageName = $request->input('zalo_qr');
            $supporter->full_name = $request->input('full_name');
            $supporter->banking_id = $request->input('banking_id');
            $supporter->status = $request->input('status');
            $supporter->phone = $request->input('phone'); // Lấy tgiá trị của phone từ request
            $supporter->date_of_birth = $request->input('date_of_birth'); // Lấy giá trị của date_of_birth từ request
            $supporter->email = $request->input('email'); // Lấy giá trị của email từ request
            $supporter->zalo_qr = '/supporters/' . $imageName;
            $supporter->updateSupporter($id, $request->all());
            return response()->json(['message' => 'Order updated successfully']);
        };

    }


    public function delete($id)
    {
        $supporter = new Supporter();
        $supporter->deleteSupporter($id);
        return response()->json(['message' => 'Order deleted successfully']);
    }
    public function activeItem($id)
    {
        $supporter = Supporter::find($id);
        if (!$supporter) {
            // Xử lý khi không tìm thấy bản ghi
            return response()->json(['message' => 'Không tìm thấy bản ghi'], 404);
        }
        $supporter->status = 'active';
        $supporter->save();
        return response()->json(['message' => 'Thành công'], 200);
    }
    public function inactiveItem($id)
    {
        $supporter = Supporter::find($id);
        if (!$supporter) {
            // Xử lý khi không tìm thấy bản ghi
            return response()->json(['message' => 'Không tìm thấy bản ghi'], 404);
        }
        $supporter->status = 'active';
        $supporter->save();
        return response()->json(['message' => 'Thành công'], 200);
    }
    public function loadList(Request $request)
    {
        $supporter = new Supporter();
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 10);
        $offset = ($page - 1) * $limit;
        if ($request->has('filters_status')) {
            $supporter = Supporter::where('status', '=', $request->filters_status);
        }
        $supporters = $supporter->with('banking')->get();
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
