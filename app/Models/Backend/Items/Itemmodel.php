<?php

namespace App\Models\Backend\Items;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemmodel extends Model
{
    protected $fillable=[
        'itemname',
        'iteam_drescreption',
        'itemimage',
        'price',
        'item_code',
    ];
    use HasFactory;
    
}
