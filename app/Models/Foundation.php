<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foundation extends Model
{
    use HasFactory;
    protected $table = 'foundations';

    protected $fillable = ['full_name', 'phone', 'email', 'status', 'avatar'];

    public function createFoundation($data)
    {
        return Foundation::create($data);
    }

    public function updateFoundation($id, $data)
    {
        $foundation = Foundation::find($id);
        $foundation->update($data);
        return $foundation;
    }

    public function deleteFoundation($id)
    {
        $foundation = Foundation::find($id);
        $foundation->delete();
    }

    public function loadList()
    {
        return Foundation::all();
    }
}
