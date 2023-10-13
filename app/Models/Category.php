<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function subCategories()
  {
    return $this->hasOne(SubCategory::class, 'id', 'sub_category_id');
  }
}
