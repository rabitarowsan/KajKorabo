<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactRequest extends Model
{
    use HasFactory;
    protected $fillable = [
    'full_name', 'email', 'phone_number', 'meeting_time', 'service_id',
];
}
