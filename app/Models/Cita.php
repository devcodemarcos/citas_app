<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = ['date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
