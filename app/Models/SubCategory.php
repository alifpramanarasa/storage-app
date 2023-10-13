<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
  public function categories()
  {
    return $this->belongsTo(Category::class, 'id', 'sub_category_id');
  }
}
