<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    protected $table = 'model';
    use HasFactory;

    public function fabricator()
    {
        return $this->belongsTo(Fabricator::class, 'fabricator_id');
    }
}
