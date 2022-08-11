<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'comment',
      'customer_id',
      'registed_date',
      'update_date'
    ];

    public function customer() {
      return $this->belongsTo(Customer::class);
    }
}
