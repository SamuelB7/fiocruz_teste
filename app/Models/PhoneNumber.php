<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    use HasFactory;

    protected $table = 'phone_number';

    protected $fillable = [
        'number',
        'user_id'
    ];

    protected $visible = [
        'number',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
