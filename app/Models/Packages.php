<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    protected $table = 'packages';

    protected $fillable = ['full_name', 'status', 'price', 'count', 'foundations_id'];

    public function createPackages($data)
    {
        return Packages::create($data);
    }

    public function updatePackages($id, $data)
    {
        $package = Packages::find($id);
        $package->update($data);
        return $package;
    }

    public function deletePackages($id)
    {
        $package = Packages::find($id);
        $package->delete();
    }

    public function loadList()
    {
        return Packages::with('foundation')->get();
    }

    public function foundation()
    {
        return $this->belongsTo(Foundation::class);
    }
}
