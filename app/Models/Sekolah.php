<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sekolah extends Model
{
    use HasFactory;

    protected $table = 'sekolah';

    public function Category(): HasOne {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
