<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'nickname',
        'phone',
        'id_app',
        'user_ids'
    ];
    public function createOrder($data)
    {
        return Order::create($data);
    }

    public function updateOrder($id, $data)
    {
        $order = Order::find($id);
        $order->update($data);
        return $order;
    }

    public function deleteOrder($id)
    {
        $order = Order::find($id);
        $order->delete();
    }

    public function loadList()
    {
        return Order::all();
    }
}
