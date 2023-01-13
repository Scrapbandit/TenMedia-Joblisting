<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'address',
    ];
    /**
     * Get the user in the company.
     */
    public function users()
    {
        return $this->hasMany(user::class);
        
    }
    public function jobs()
    {
        return $this->hasMany(job::class);
        
    }
}
