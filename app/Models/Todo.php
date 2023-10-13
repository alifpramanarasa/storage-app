<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Todo extends Model
{
  use HasFactory;

  public $table = 'todos';

  public $fillable = [
    'title',
    'slug',
    'description',
    'completed',
  ];

  // Relationship
  public function category(): HasOne
  {
    return $this->hasOne(Category::class, 'id', 'category_id');
  }

  public function subCategories(): HasOneThrough
  {
    return $this->hasOneThrough(SubCategory::class, Category::class, 'id', 'id', 'category_id', 'sub_category_id');
  }
}
