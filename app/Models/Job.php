<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['title', 'description', 'salary', 'location', 'category', 'experience'];

    public static array $experience = ['Entry', 'Intermediate', 'Senior'];
    public static array $categories = ['IT', 'Finance', 'HR', 'Sales', 'Marketing'];
    use HasFactory;
}
