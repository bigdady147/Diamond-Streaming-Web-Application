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
//        $foundation = new Foundation();
//        $foundation->createFoundation($request->all());
        if ($request->has('avatar')) {
            $imageData = $request->input('avatar');
            $imageData = str_replace('data:image/jpeg;base64,', '', $imageData);
            $imageData = str_replace(' ', '+', $imageData);
            $imageName = uniqid() . '.jpg';
            $imagePath = public_path('foundations/' . $imageName);
            $imageData = base64_decode($imageData);
            file_put_contents($imagePath, $imageData);
        } else {
            return response()->json(['message' => 'Error No Images Upload']);
        }
        $foundation = new Foundation();
        $foundation->full_name = $request->input('full_name');
        $foundation->phone = $request->input('phone'); // Lấy tgiá trị của phone từ request
        $foundation->email = $request->input('email'); // Lấy giá trị của email từ request
        $foundation->avatar = '/foundations/' . $imageName;
        $foundation->status = 'active';
        $foundation->save();

        return response()->json(['message' => 'Foundation created successfully']);
    }

    public function update(Request $request, $id)
    {
        if ($request->has('avatar')) {
            $imageData = $request->input('avatar');
            $imageData = str_replace('data:image/jpeg;base64,', '', $imageData);
            $imageData = str_replace(' ', '+', $imageData);
            $imageName = uniqid() . '.jpg';
            $imagePath = public_path('foundations/' . $imageName);
            $imageData = base64_decode($imageData);
            file_put_contents($imagePath, $imageData);
        } else {
            return response()->json(['message' => 'Error No Images Upload']);
        }
        $foundation = new Foundation();
        $foundation->full_name = $request->input('full_name');
        $foundation->phone = $request->input('phone'); // Lấy tgiá trị của phone từ request
        $foundation->email = $request->input('email'); // Lấy giá trị của email từ request
        $foundation->avatar = '/foundations/' . $imageName;
        $foundation->status = 'active';
        $foundation->updateFoundation($id, $request->all());
        return response()->json(['message' => 'Foundation updated successfully']);
    }

    public function delete($id)
    {
        $foundation = new Foundation();
        $foundation->deleteFoundation($id);
        return response()->json(['message' => 'Foundation deleted successfully']);
    }

    public function loadList(Request $request)
    {
        $foundation = new Foundation();
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 10);
        $offset = ($page - 1) * $limit;
        $foundations = $foundation->loadList($offset, $limit);
        $total = $foundation->count();
        return response()->json([
            'data' => $foundations,
            'meta' => [
                'total' => $total,
                'page' => $page,
                'limit' => $limit,
                'last_page' => ceil($total / $limit)
            ]
        ]);
        $foundation = new Foundation();
        return response()->json($foundation->loadList());
    }
}
