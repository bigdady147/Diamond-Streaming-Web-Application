<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supporter extends Model
{
    use HasFactory;

    protected $table = 'supporters';
    protected $fillable = [
        'full_name',
        'phone',
        'date_of_birth',
        'email',
        'banking_id',
        'status',
        'zalo_qr',
    ];
    public function createSupporter($data)
    {
        return Supporter::create($data);
    }

    public function updateSupporter($id, $data)
    {
        $supporter = Supporter::find($id);
        $supporter->update($data);
        return $supporter;
    }

    public function deleteSupporter($id)
    {
        $supporter = Supporter::find($id);
        $supporter->delete();
    }

    public function loadList()
    {
        return Supporter::all();
    }
    public function banking()
    {
        return $this->belongsTo(Banking::class);
    }
}
