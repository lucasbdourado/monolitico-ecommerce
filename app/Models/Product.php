<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'url','description', 'price', 'image'];

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    public function inventory()
    {
        if(sizeof($this->inventories) == 0){
            return null;
        }
        return $this->inventories;
    }
}
