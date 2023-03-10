<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'company',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
