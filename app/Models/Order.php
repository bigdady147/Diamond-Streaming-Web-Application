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
        'packages_id',
        'foundations_id',
        'supporters_id',
        'phone',
        'status',
        'id_app',
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

    public function loadList($offset, $limit)
    {
        return $this->with('supporters','packages','foundations')->orderBy('created_at', 'desc')->offset($offset)->limit($limit)->get();

    }
    public function supporters()
    {
        return $this->belongsTo(Supporter::class);
    }
    public function packages()
    {
        return $this->belongsTo(Packages::class);
    }
    public function foundations()
    {
        return $this->belongsTo(Foundation::class);
    }
}
