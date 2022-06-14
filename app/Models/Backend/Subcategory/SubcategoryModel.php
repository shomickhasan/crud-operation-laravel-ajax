<?php

namespace App\Models\Backend\Subcategory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubcategoryModel extends Model
{
    use HasFactory;
    protected $filable=[
        'categoryId',
        'subcategoryName',
        'subcategoryDrescreption',
        'image',
    ];
}
